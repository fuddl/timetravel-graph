<?php

//include('movies/all.php');
//include('TOS/all.php');
include('TNG/6x15.php');

$GLOBALS['doc_title'] = 'Star Trek';



//$time_travels = array(
//    


//    'm7' => array(
//        'start' => 2293,
//        'end' => 2371,
//        'traveler_desc' => 'James Tiberius Kirk',
//        'traveler_type' => 'people',
//        'desc' => 'Star Trek: Treffen der Generationen'
//    ),

//    'TNG|3×15/1' => array(
//        'start' => 2344,
//        'end' => 2366,
//        'traveler_desc' => 'The USS Enterprise NCC-1701-C',
//        'traveler_type' => 'starship',
//        'end_timeline' => 'longer_klingon_war',
//        'desc' => 'Die alte Enterprise'
//    ),
//    'TNG|3×16/1' => array(
//        'start' => 2366,
//        'end' => 2344,
//        'back_to_the' => 'past',
//        'start_timeline' => 'longer_klingon_war',
//        'traveler_desc' => 'The USS Enterprise NCC-1701-C',
//        'traveler_type' => 'starship',
//        'desc' => 'Die alte Enterprise'
//    ),
//    'TNG|5×26/1' => array(
//        'start' => 2368,
//        'end' => 1893,
//        'traveler_type' => 'people',
//        'desc' => 'Gefahr aus dem 19. Jahrhundert, Teil I'
//    ),
//    'TNG|5×26/2' => array(
//        'start' => 1893,
//        'end' => 2368,
//        'back_to_the' => 'future',
//        'traveler_type' => 'people',
//        'desc' => 'Gefahr aus dem 19. Jahrhundert, Teil I'
//    ),
//    'TNG|7×21/1' => array(
//        'start' => 2410,
//        'end' => 2370,
//        'start_approx' => TRUE,
//        'traveler_type' => 'people',
//        'traveler_desc' => 'Alexander Rozhenko',
//        'desc' => 'Ritus des Aufsteigens'
//    ),
//    'DS9|3×11/1' => array(
//        'start' => 2371,
//        'end' => 2024,
//        'traveler_type' => 'people',
//        'traveler_desc' => 'Benjamin Lafayette Sisko, Julian Bashir, Jadzia Dax. Later Kira Narys and Miles Edward O\'Brian',
//        'desc' => 'Gefangen in der Vergangenheit, Teil I'
//    ),
//    'DS9|3×11/2' => array(
//        'start' => 2371,
//        'end' => 2371,
//        'end_timeline' => 'no_bell_riots',
//        'traveler_type' => 'starship',
//        'traveler_desc' => 'Benjamin Lafayette Sisko, Julian Bashir, Jadzia Dax. Later Kira Narys and Miles Edward O\'Brian',
//        'desc' => 'Gefangen in der Vergangenheit, Teil I'
//    ),
//    'DS9|3×12/1' => array(
//        'start' => 2371,
//        'end' => 1930,
//        'start_timeline' => 'no_bell_riots',
//        'traveler_type' => 'people',
//        'traveler_desc' => 'Kira Narys and Miles Edward O\'Brian',
//        'desc' => 'Gefangen in der Vergangenheit, Teil II'
//    ),
//    'DS9|3×12/2' => array(
//        'start' => 1930,
//        'end' => 2371,
//        'back_to_the' => 'future',
//        'end_timeline' => 'no_bell_riots',
//        'traveler_type' => 'people',
//        'traveler_desc' => 'Kira Narys and Miles Edward O\'Brian',
//        'desc' => 'Gefangen in der Vergangenheit, Teil II'
//    ),
//    'DS9|3×12/3' => array(
//        'start' => 2371,
//        'end' => 1967,
//        'start_timeline' => 'no_bell_riots',
//        'traveler_type' => 'people',
//        'traveler_desc' => 'Kira Narys and Miles Edward O\'Brian',
//        'desc' => 'Gefangen in der Vergangenheit, Teil II'
//    ),
//    'DS9|3×12/4' => array(
//        'start' => 1967,
//        'end' => 2371,
//        'end_timeline' => 'no_bell_riots',
//        'back_to_the' => 'future',
//        'traveler_type' => 'people',
//        'traveler_desc' => 'Kira Narys and Miles Edward O\'Brian',
//        'desc' => 'Gefangen in der Vergangenheit, Teil II'
//    ),
//    'DS9|3×12/5' => array(
//        'start' => 2371,
//        'end' => 2048,
//        'start_timeline' => 'no_bell_riots',
//        'end_timeline' => 'no_bell_riots',
//        'traveler_type' => 'people',
//        'traveler_desc' => 'Kira Narys and Miles Edward O\'Brian',
//        'desc' => 'Gefangen in der Vergangenheit, Teil II'
//    ),
//    'DS9|3×12/6' => array(
//        'start' => 2048,
//        'end' => 2371,
//        'end_timeline' => 'no_bell_riots',
//        'start_timeline' => 'no_bell_riots',
//        'traveler_type' => 'people',
//        'back_to_the' => 'future',
//        'traveler_desc' => 'Kira Narys and Miles Edward O\'Brian',
//        'desc' => 'Gefangen in der Vergangenheit, Teil II'
//    ),
//    'DS9|4×07/1' => array(
//        'start' => 2372,
//        'end' => 2048,
//        'traveler_type' => 'starship',
//        'desc' => 'Kleine, grüne Männchen'
//    ),
//    'DS9|4×07/2' => array(
//        'start' => 1947,
//        'end' => 2372,
//        'back_to_the' => 'future',
//        'traveler_type' => 'starship',
//        'desc' => 'Kleine, grüne Männchen'
//    ),
//    'DS9|5×06/1' => array(
//        'start' => 2373,
//        'end' => 2268,
//        'traveler_type' => 'starship',
//        'desc' => 'Immer die Last mit den Tribbles'
//    ),
//    'DS9|5×06/2' => array(
//        'start' => 2268,
//        'end' => 2373,
//        'traveler_type' => 'starship',
//        'desc' => 'Immer die Last mit den Tribbles',
//        'back_to_the' => 'future',
//    ),
//    'VOY|3×08' => array(
//        'start' => 2373,
//        'end' => 1996,
//        'traveler_type' => 'starship',
//        'desc' => 'Vor dem Ende der Zukunft, Teil I'
//    ),
//    'VOY|3×09' => array(
//        'start' => 1996,
//        'end' => 2373,
//        'back_to_the' => 'future',
//        'traveler_type' => 'starship',
//        'desc' => 'Vor dem Ende der Zukunft, Teil I'
//    ),
//    'ENT|3×01/1' => array(
//        'start' => 2750,
//        'start_approx' => TRUE,
//        'end' => 2151,
//        'traveler_type' => 'signal',
//        'desc' => 'Future Guy communicate with the Suliban'
//    ),
//    'ENT|3×01/2' => array(
//        'start' => 2151,
//        'end_approx' => TRUE,
//        'end' => 2750,
//        'traveler_type' => 'signal',
//        'desc' => 'Future Guy communicate with the Suliban'
//    ),
//    'ENT|3×11/1' => array(
//        'start' => 2153,
//        'end' => 2004,
//        'traveler_type' => 'people',
//        'desc' => 'Carpenter Street'
//    ),
//    'ENT|3×11/2' => array(
//        'start' => 2004,
//        'end' => 2153,object
//        'back_to_the' => 'future',
//        'traveler_type' => 'people',
//        'desc' => 'Carpenter Street'
//    ),
//    'ENT|3×21/1' => array(
//        'start' => 2154,
//        'end' => 2037,
//        'traveler_type' => 'starship',
//        'desc' => 'E²'
//    ),
//    'ENT|3×24/1' => array(
//        'start' => 2154,
//        'end' => 1944,
//        'end_timeline' => 'nazis_conquer_usa',
//        'traveler_type' => 'starship',
//        'desc' => 'Stunde Null'
//    ),
//    'ENT|3×24/2' => array(
//        'start' => 1944,
//        'start_timeline' => 'nazis_conquer_usa',
//        'end' => 2154,
//        'back_to_the' => 'future',
//        'traveler_type' => 'starship',
//        'desc' => 'Stunde Null'
//    ),
//    'ENT|3×08' => array(
//        'start' => 2165,
//        'start_timeline' => 'nazis_conquer_usa',
//        'end' => 2153,
//        'start_timeline' => 'xindi_destroy_earth',
//        'traveler_type' => 'consciousness',
//        'desc' => 'Stunde Null'
//    ),
//    'VOY|7×25' => array(
//        'start' => 2404,
//        'end' => 2378,
//        'start_timeline' => 'voyager_long_way_home',
//        'traveler_type' => 'starship',
//        'desc' => 'Endspiel, Teil I',
//    ),
//    'VOY|5×06' => array(
//        'start' => 2390,
//        'end' => 2375,
//        'traveler_type' => 'signal',
//        'desc' => 'Temporale Paradoxie'
//    ),
//    'TNG|5×09/1' => array(
//        'start' => 2859,
//        'start_approx' => TRUE,
//        'end' => 2150,
//        'end_approx' => TRUE,
//        'traveler_type' => 'timeship',
//        'taveler_desc' => 'Berlinghoff Rasmussen',
//        'desc' => 'Der zeitreisende Historiker'
//    ),
//    'TNG|5×09/2' => array(
//        'start' => 2150,
//        'start_approx' => TRUE,
//        'end' => 2368,
//        'traveler_type' => 'timeship',
//        'taveler_desc' => 'Berlinghoff Rasmussen',
//        'desc' => 'Der zeitreisende Historiker'
//    ),
//    'TNG|3×19/1' => array(
//        'start' => 2650,
//        'start_approx' => TRUE,
//        'end' => 2150,
//        'end_approx' => TRUE,
//        'traveler_type' => 'people',
//        'taveler_desc' => '	Kal Dano',
//        'desc' => 'Picard macht Urlaub'
//    ),
//    'TNG|3×19/2' => array(
//        'start' => 2650,
//        'start_approx' => TRUE,
//        'end' => 2367,
//        'traveler_type' => 'people',
//        'taveler_desc' => '	Ajur und Boratus',
//        'desc' => 'Picard macht Urlaub'
//    ),
//    'TNG|5×18' => array(
//        'start' => 2278,
//        'end' => 2368,
//        'traveler_type' => 'starship',
//        'taveler_desc' => 'USS Bozeman NCC-1941',
//        'desc' => 'Déjà Vu'
//    ),u
//    'DS9|4×03/1' => array(
//        'start' => 2372,
//        'end' => 2373,
//        'traveler_type' => 'people',
//        'taveler_desc' => 'Benjamin Lafajette Sisko',
//        'desc' => 'Der Besuch'
//    ),
//    'DS9|4×03/2' => array(
//        'start' => 2373,
//        'end' => 2389,
//        'start_timeline' => 'main_timeline',
//        'end_timeline' => 'early_lost_sisco',
//        'traveler_type' => 'people',
//        'taveler_desc' => 'Benjamin Lafajette Sisko',
//        'desc' => 'Der Besuch'
//    ),
//    'DS9|4×03/3' => array(
//        'start' => 2389,
//        'end' => 2408,
//        'start_timeline' => 'early_lost_sisco',
//        'end_timeline' => 'early_lost_sisco',
//        'traveler_type' => 'people',
//        'taveler_desc' => 'Benjamin Lafajette Sisko',
//        'desc' => 'Der Besuch'
//    ),
//    'DS9|4×03/4' => array(
//        'start' => 2408,
//        'end' => 2422,
//        'start_timeline' => 'early_lost_sisco',
//        'end_timeline' => 'early_lost_sisco',
//        'traveler_type' => 'people',
//        'taveler_desc' => 'Benjamin Lafajette Sisko',
//        'desc' => 'Der Besuch'
//    ),
//    'DS9|4×03/5' => array(
//        'start' => 2422,
//        'end' => 2450,
//        'start_timeline' => 'early_lost_sisco',
//        'end_timeline' => 'early_lost_sisco',
//        'traveler_type' => 'people',
//        'taveler_desc' => 'Benjamin Lafajette Sisko',
//        'desc' => 'Der Besuch'
//    ),
//    'DS9|4×03/6' => array(
//        'start' => 2422,
//        'end' => 2450,
//        'start_timeline' => 'early_lost_sisco',
//        'end_timeline' => 'early_lost_sisco',
//        'traveler_type' => 'people',
//        'taveler_desc' => 'Benjamin Lafajette Sisko',
//        'desc' => 'Der Besuch'
//    ),
//    'DS9|4×03/7' => array(
//        'start' => 2450,
//        'end' => 2372,
//        'start_timeline' => 'early_lost_sisco',
//        'end_timeline' => 'main_timeline',
//        'traveler_type' => 'consciousness',
//        'back_to_the' => 'past',
//        'taveler_desc' => 'Benjamin Lafajette Sisko',
//        'desc' => 'Der Besuch'
//    ),
//    'DS9|4×17/1' => array(
//        'start' => 2170,
//        'end' => 2372,
//        'approx_start' => TRUE,
//        'traveler_type' => 'starship',
//        'taveler_desc' => 'Akorem Laan in his Light Ship',
//        'desc' => 'Die Übernahme'
//    ),
//    'DS9|4×17/2' => array(
//        'start' => 2372,
//        'end' => 2170,
//        'approx_start' => TRUE,
//        'traveler_type' => 'starship',
//        'back_to_the' => 'past',
//        'taveler_desc' => 'Akorem Laan in his Light Ship',
//        'desc' => 'Die Übernahme'
//    ),
//    'DS9|4×17/2' => array(
//        'start' => 2372,
//        'end' => 2170,
//        'approx_start' => TRUE,
//        'traveler_type' => 'starship',
//        'back_to_the' => 'past',
//        'taveler_desc' => 'Akorem Laan in his Light Ship',
//        'desc' => 'Die Übernahme'
//    ),
//    'DS9|5×22' => array(
//        'start' => 2373,
//        'end' => 2130,
//        'approx_start' => TRUE,
//        'traveler_type' => 'starship',
//        'taveler_desc' => 'USS Defiant',
//        'desc' => 'Kinder der Zeit'
//    ),
//    'DS9|6×17/1' => array(
//        'start' => 2374,
//        'end' => 2346,
//        'traveler_type' => 'people',
//        'taveler_desc' => 'Kira Nerys',
//        'desc' => 'Tiefes Unrecht'
//    ),
//    'DS9|6×17/2' => array(
//        'start' => 2346,
//        'end' => 2374,
//        'back_to_the' => 'future',
//        'traveler_type' => 'people',
//        'taveler_desc' => 'Kira Nerys',
//        'desc' => 'Tiefes Unrecht'
//    ),
//    'DS9|6×24/1' => array(
//        'start' => 2374,
//        'end' => 2050,
//        'traveler_type' => 'people',
//        'taveler_desc' => 'Molly O\'Brien',
//        'desc' => 'Das Zeitportal'
//    ),
//    'DS9|6×24/2' => array(
//        'start' => 2060,
//        'end' => 2374,
//        'start_timeline' => 'mollys_ten_years_alone',
//        'traveler_type' => 'people',
//        'back_to_the' => 'future',
//        'taveler_desc' => '10 years older Molly O\'Brien',
//        'desc' => 'Das Zeitportal'
//    ),
//    'DS9|6×24/3' => array(
//        'start' => 2374,
//        'end' => 2060,
//        'traveler_type' => 'people',
//        'back_to_the' => 'past',
//        'taveler_desc' => '10 years older Molly O\'Brien',
//        'desc' => 'Das Zeitportal'
//    ),
//    'DS9|6×24/4' => array(
//        'start' => 2060,
//        'end' => 2374,
//        'traveler_type' => 'people',
//        'back_to_the' => 'future',
//        'taveler_desc' => 'Molly O\'Brien',
//        'desc' => 'Das Zeitportal'
//    ),
//    'DS9|6×25/1' => array(
//        'start' => 2371,
//        'end' => 2374,
//        'traveler_type' => 'signal',
//        'taveler_desc' => 'Lisa Cusak\'s distress call',
//        'desc' => 'Der Klang ihrer Stimme'
//    ),
//    'DS9|6×25/2' => array(
//        'start' => 2374,
//        'end' => 2371,
//        'traveler_type' => 'signal',
//        'taveler_desc' => 'Answers on Lisa Cusak\'s distress call',
//        'desc' => 'Der Klang ihrer Stimme'
//    ),
//);


//
//$timelines = array(
//    'main_timeline' => array(
//        'timelayer' => 0,
//    ),
//    'nazis_conquer_usa' => array(
//        'point_of_divergence' => 1916,
//        'first_timetravel_event' => 1944,
//        'vanishing_point' => 1944,
//        'timelayer' => 1,
//    ),
//    'no_bell_riots' => array(
//        'point_of_divergence' => 2024,
//        'first_timetravel_event' => 2048,
//        'timelayer' => 2,
//        'vanishing_point' => 2371
//    ),

//    'xindi_destroy_earth' => array(
//        'point_of_divergence' => 2154,
//        'first_timetravel_event' => 2165,
//        'timelayer' => 1,
//        'vanishing_point' => 2165,
//    ),
//    'longer_klingon_war' => array(
//        'point_of_divergence' => 2344,
//        'first_timetravel_event' => 2366,
//        'timelayer' => -1,
//        'vanishing_point' => 2366,
//    ),
//    'early_lost_sisco' => array(
//        'point_of_divergence' => 2372,
//        'first_timetravel_event' => 2389,
//        'timelayer' => 1,
//    ),

//    'mollys_ten_years_alone' => array(
//        'point_of_divergence' => 2050,
//        'point_of_divergence_approx' => TRUE,
//        'first_timetravel_event' => 2060,
//        'first_timetravel_event_approx' => TRUE,
//        'timelayer' => 1,
//        'vanishing_point' => 2060,
//    ),
//    'voyager_long_way_home' => array(
//        'point_of_divergence' => 2378,
//        'first_timetravel_event' => 2403,
//        'timelayer' => 0.5,
//        'vanishing_point' => 2403,
//    ),
//);