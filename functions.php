<?php

/**
 * Normalized Term Frequency - TF(t)
 *
 * @param string $input      - document or input message
 * @param array $doc         - term document
 * 
 * @return array             - concepts by relevance
 */

function tf_total($input, $doc) {
	if (! is_string($input)) return '$input parameter should be a string.';
	if (! is_array($doc)) return '$doc parameter should be an array.';
	$input = strtolower($input);

	$doc1 = array();
	foreach ($doc as $key => $val) {
		$count = 0;
		foreach ($val as $row) {
			$freq = substr_count($input, $row); // raw frequency
			$count += $freq / count( explode(' ', trim($input)) ); // total normalized frequency
		}
		$doc1[$key] = $count;
	}
	unset($doc);
	gc_collect_cycles();

	arsort($doc1);
	return $doc1;
}