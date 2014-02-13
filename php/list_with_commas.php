<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($input, $sort = FALSE) {

	$exploded = explode(', ', $input);
	
	if ($sort) {
		sort($input);
	} 
	
	$lastItem = array_pop($exploded);
	return implode(', ', $exploded) . ' and ' . $lastItem;
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;

?>