<?php

require __DIR__ . '/functions.php';

$doc = array(); // Term document
$doc['presence-pain'] = [' pain', ' hurt', 'ache', ' discomfort', ' in', ' hav', ' experienc']; // Concept dictionary
$doc['location-pain'] = [' pain', ' hurt', 'ache', ' discomfort', 'where', ' at', ' locat', ' area', ' point', ' show', ' part'];
$doc['time-pain'] = [' pain', ' hurt', 'ache', ' discomfort', 'when', 'how long', ' start', ' now']; // root term in lower case
$doc['degree-pain'] = [' pain', ' hurt', 'ache', ' discomfort', ' rate', ' scale', ' degree', 'how bad', ' better', ' wors'];
$doc['spread-pain'] = [' pain', ' hurt', 'ache', ' discomfort', ' spread', ' radiat', ' area']; // include space where appropriate

$message1 = 'Are you in pain? If so, which part of your body are you having pain?'; // message
$message2 = 'How bad is your pain? Does the pain spread to other areas?';
$message3 = 'When did the pain start?';

var_dump( tf_total($message1, $doc) ); // presence and location
// var_dump( tf_total($message2, $doc) ); // spread, location and degree
// var_dump( tf_total($message3, $doc) ); // time