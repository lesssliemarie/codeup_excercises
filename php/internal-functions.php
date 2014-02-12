<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function setOrEmpty($var) {
	if (empty($var)) {
		return true;
	} elseif (isset($var)) {
		return true;
	} else {
		return false;
	}
}

// TEST: If var $nothing is set, display '$nothing is SET'
// Before first conditional, unset($nothing)
// ^ throws error of undefined variable
// unset($nothing);

if (setOrEmpty($nothing)) {
	echo "\$nothing is SET\n";
} else {
	echo "\$nothing is NOT SET\n";
}

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

if (setOrEmpty($nothing)) {
	echo "\$nothing is EMPTY\n";
} else {
	echo "\$nothing is NOT EMPTY!\n";
}

// TEST: If var $something is set, display '$something is SET'

if (setOrEmpty($something)) {
	echo "\$something is SET\n";
} else {
	echo "\$something is NOT SET\n";
}

// Serialize the array $array, and output the results

$serialize = serialize($array);
echo "This is a serialized array:\n" . $serialize . "\n";

// Unserialize the array $array, and output the results

$unserialize = unserialize($serialize);
echo "This is an unserialized array:\n";
var_dump($unserialize) . "\n";

?>