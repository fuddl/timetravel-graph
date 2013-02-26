<?php

$time_travels['bttf1/1'] = array(
        'start' => 1985,
        'end' => 1955,
        'traveler_type' => 'time_machine',
        'taveler_desc' => 'Marty McFly',
    );
$time_travels['bttf1/2'] = array(
        'start' => 1955,
        'end' => 1985,
        'back_to_the' => 'future',
        'traveler_type' => 'time_machine',
        'taveler_desc' => 'Marty McFly',
);
$time_travels['bttf2/1'] = array(
        'start' => 1985,
        'end' => 2015,
        'traveler_type' => 'time_machine',
        'taveler_desc' => 'Marty McFly, Doc Brown und Jennifer',
    );
$time_travels['bttf2/2'] = array(
        'start' => 2015,
        'end' => 1955,
        'traveler_type' => 'time_machine',
        'taveler_desc' => 'Biff',
    );
$time_travels['bttf2/3'] = array(
        'start' => 1955,
        'end' => 2015,
        'back_to_the' => 'future',
        'traveler_type' => 'time_machine',
        'taveler_desc' => 'Biff',
    );
$time_travels['bttf2/4'] = array(
        'start' => 1985,
        'end' => 2015,
        'back_to_the' => 'future',
        'end_timeline' => 'biff_rules',
        'traveler_type' => 'time_machine',
    );
$time_travels['bttf2/5'] = array(
        'start' => 1985,
        'end' => 1955,
        'start_timeline' => 'biff_rules',
        'traveler_type' => 'time_machine',
    );
$time_travels['bttf2/6'] = array(
        'start' => 1985,
        'end' => 1885,
        'traveler_type' => 'time_machine',
        'taveler_desc' => 'Doc Brown',
    );

$time_travels['bttf3/1'] = array(
        'start' => 1955,
        'end' => 1885,
        'traveler_type' => 'time_machine',
        'taveler_desc' => 'Marty McFly',
    );
$time_travels['bttf3/2'] = array(
        'start' => 1885,
        'end' => 1985,
        'traveler_type' => 'time_machine',
        'taveler_desc' => 'Marty McFly',
    );

$timelines['no_marty_mcfly'] = array(
        'point_of_divergence' => 1955,
        'first_timetravel_event' => 1985,
        'vanishing_point' => 1985,
        'timelayer' => 1,
    );

$timelines['biff_rules'] = array(
        'point_of_divergence' => 1955,
        'first_timetravel_event' => 1985,
        'vanishing_point' => 2015,
        'timelayer' => -1,
    );