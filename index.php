<?php

// hier kann man inhalte eintragen

global $time_travels;
global $timelines;

$GLOBALS['time_travels'] = array();
$GLOBALS['timelines'] = array();



$timelines['main_timeline'] = array(
        'timelayer' => 0,
    );

//include('data/star_trek/all.php');
//include('data/making_history.php');
include('data/back_to_the_future/1.php');


// STYLE

$GLOBALS['zoom'] = 5;
$GLOBALS['stage_width'] = 1000;
$GLOBALS['main_timeline_offset'] = $GLOBALS['stage_width'] / 2;
$GLOBALS['time_layer_distance'] = 70;
$GLOBALS['year_offset'] = 15;
$GLOBALS['ruler_offset_x'] = $GLOBALS['main_timeline_offset'] + 5;

$year_offset = get_year_range($time_travels, $timelines);
$GLOBALS['min_range'] = $year_offset['start'];
$GLOBALS['max_range'] = $year_offset['end'];

function get_styling() {
  
  $timeline_color = '#3A5766';

  return '<defs>
    <style>

    #ruler line{stroke:white;}

    .timeline{stroke-width:5;stroke:' . $timeline_color . ';fill:none}
    .timeline.vanishing{stroke:url(#timeline_end_gradient)}

    .time_travel{stroke:white;stroke-width:2; fill:none}
    .time_travel.back_to_the_future{opacity:.6}

    .time_travel.taveler_type_timeship{stroke:white}
    .time_travel.taveler_type_starship{stroke:#66BBFF}
    .time_travel.taveler_type_people{stroke:#0269B3}
    .time_travel.taveler_type_signal{stroke:white}
    .time_travel.taveler_type_consciousness{stroke:white; stroke-width:1}
    </style>
<linearGradient id="timeline_end_gradient" gradientUnits="objectBoundingBox" x1="0%" y1="0%" x2="0" y2="100%">
<stop offset="0%" style="stop-color:' . $timeline_color . ';stop-opacity:1"/>
<stop offset="100%" style="stop-color:' . $timeline_color . ';stop-opacity:0"/>
</linearGradient>
</defs>
';
}

// Programm-Foo

function draw_ruler() {
  global $ruler_offset_x;
  global $min_range;
  global $max_range;
  global $zoom;

  $output = '<g id="ruler" style="opacity:.2">';

  $output .= '<line x1="' . $ruler_offset_x . '"  x2="' . $ruler_offset_x . '" y1="0" y2="' . (($max_range - $min_range) * $zoom) . '" />';

  for ($i = $min_range; $i < $max_range; $i++) {
    if ($i % 10) {
      $width = 5;
    } else {
      $width = 10;
      $output .= '<text x="' . ($ruler_offset_x + 15) . '" y="' . (($i - $min_range) * $zoom) . '" style="fill:#fff;font-family:sans-serif">' . $i . '</text>';
    }
    $output .= '<line x1="' . ($ruler_offset_x) . '"  x2="' . ($ruler_offset_x + $width) . '" y1="' . (($i - $min_range) * $zoom) . '" y2="' . (($i - $min_range) * $zoom) . '" />';
  }
  $output .= '</g>';

  return $output;
}

function draw_timeline($timeline) {
  if (!$timeline['timelayer']) {
    $timeline['timelayer'] = 0;
  }
  global $zoom;
  global $main_timeline_offset;
  global $time_layer_distance;
  global $min_range;
  global $max_range;

  if (!$timeline['point_of_divergence']) {
    return '<path class="timeline" d="M' . $main_timeline_offset . ',0 L' . $main_timeline_offset . ', ' . ($max_range * $zoom) . '" />';
  }

  $start_y = (($timeline['point_of_divergence'] - $min_range) * $zoom);
  $start_x = $main_timeline_offset + $start_timelayer;

  $end_y = (($timeline['first_timetravel_event'] - $min_range) * $zoom);
  $end_x = get_timelayer_offset($timeline['timelayer']);

  $range = $end_y - $start_y;

  $c1_y = ((($range / 3)) + $start_y);
  $c2_y = ((($range / 3)) + $start_y);

  if ($timeline['vanishing_point']) {
    $curve_end_y = ($timeline['vanishing_point'] - $min_range) * $zoom;

    $timeline_end = '<path d="M' . $end_x . ', ' . $curve_end_y . ' L' . ($end_x + 1) . ',' . ( $curve_end_y + 200) . '" class="timeline vanishing" />';
  } else {
    $curve_end_y = $max_range * $zoom;
    $timeline_end = '';
  }

  $output = '<path d="M' . $start_x . ',' . $start_y . 'C' . $start_x . ' ,' . $c1_y . ',' . $end_x . ', ' . $c2_y . ',' . $end_x . ',' . $end_y . ' L' . $end_x . ', ' . $curve_end_y . '" class="timeline" />';


  return $output . $timeline_end;
}

function draw_time_travel($travel) {
  if (!$travel['start_timeline']) {
    $travel['start_timeline'] = 'main_timeline';
  }
  if (!$travel['end_timeline']) {
    $travel['end_timeline'] = 'main_timeline';
  }

  global $main_timeline_offset;
  global $min_range;
  global $zoom;
  global $timelines;

  $width = ($travel['start'] - $travel['end']) * 2;

  $start_x = get_timelayer_offset($timelines[$travel['start_timeline']]['timelayer']);
  $start_y = (($travel['start'] - $min_range) * $zoom);

  $end_x = get_timelayer_offset($timelines[$travel['end_timeline']]['timelayer']);
  $end_y = (($travel['end'] - $min_range) * $zoom);

  $middle_x = $main_timeline_offset - $width;
  $middle_y = (($end_y - $start_y) / 2) + $start_y;

  if ($travel['back_to_the']) {
    $addclass = 'back_to_the_future';
  } else {
    $addclass = '';
  }
  $output = '<path class="time_travel taveler_type_' . $travel['traveler_type'] . ' ' . $addclass . '" d="M' . $start_x . ',' . $start_y . ' S ' . $middle_x . ' ' . $middle_y . ' ' . $end_x . ',' . $end_y . '" />';
  if($label = TRUE && $travel['back_to_the'] != 'future') {

    $linestart_x = $start_x;
    $linestart_y = $start_y;
    $lineend_x = $start_x + 200;
    
    $output .= '<text style="fill:#fff;font-family:sans-serif" x="' . $lineend_x . '" y="' . $start_y . '">' . $travel['desc'] . '</text>';
    $output .= '<path style="stroke:white; fill:none" class="label-line" d="M' . $start_x . ',' . $start_y .  ' L ' . $lineend_x . ',' . $start_y . '" />';
  }
  return $output; 
}

function get_timelayer_offset($timelayer) {
  global $main_timeline_offset;
  global $time_layer_distance;
  return $main_timeline_offset + ($timelayer * $time_layer_distance);
}


function get_year_range($time_travels, $timelines) {
  $output = array();
  
  $i = 0;
  foreach($time_travels as $travel) {
    if($i == 0) {
      $output['start'] = $travel['start'];
      $output['end'] = $travel['end'];
    }
    if($travel['start'] < $output['start']) {
      $output['start'] = $travel['start'];
    }
    if($travel['end'] < $output['start']) {
      $output['start'] = $travel['end'];
    }
    
    if($travel['start'] > $output['end']) {
      $output['end'] = $travel['start'];
    } 
    if($travel['end'] > $output['end']) {
      $output['end'] = $travel['start'];
    }
    $i++;
  }
  
  $output['start'] -= $GLOBALS['year_offset'];
  $output['end'] += $GLOBALS['year_offset'];
  
  return $output;
}

// und hier gehts los

global $zoom;
global $main_timeline_offset;
global $time_layer_distance;
global $min_range;
global $max_range;
global $ruler_offset_x;
global $stage_width;

header("Content-Type: image/svg+xml");
echo '<?xml version="1.0" encoding="iso-8859-1"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.0//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">';

echo '<svg xmlns="http://www.w3.org/2000/svg" height="' . (($max_range - $min_range) * $zoom) . '" width="' . $stage_width . '" style="background-color:black" >';

echo get_styling();

echo draw_ruler();

foreach ($time_travels as $travel) {
  echo draw_time_travel($travel);
}

foreach ($timelines as $timeline) {
  echo draw_timeline($timeline);
}

echo '</svg>';
