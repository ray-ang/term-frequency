<?php

require __DIR__ . '/functions.php';

$pain = array(); // topic
$pain['presence'] = 'pain hurt ache discomfort in have experiencing'; // subtopic
$pain['location'] = 'pain hurt ache discomfort where at location area point show part';
$pain['time'] = 'pain hurt ache discomfort when long started now';
$pain['degree'] = 'pain hurt ache discomfort rate scale degree how bad better worse';
$pain['spread'] = 'pain hurt ache discomfort spread radiate area';

$message1 = 'Are you in pain? If so, which part of your body are you having pain?'; // message
$message2 = 'How bad is your pain? Can you point where the pain is, and does the pain spread to other areas?';
$message3 = 'Where is the pain? Can you show me where it hurts?';

// Threshold adjustment
var_dump( tf_total($message1, $pain, 2) ); // presence and location
var_dump( tf_total($message2, $pain, 2) ); // degree, location and spread
var_dump( tf_total($message3, $pain, 3) ); // location