<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function setOrEmpty($name, $var) {
	if (isset($var)) {
		echo "The variable $name is set\n";
	} elseif (empty($var)) {
		echo "The variable $name is empty\n";
	}
}

setOrEmpty('$nothing', $nothing);
setOrEmpty('$something',$something);

// TEST: If var $nothing is set, display '$nothing is SET'
// Before first conditional, unset($nothing)
// ^ $nothing still reads as empty
unset($nothing);

if (isset($nothing)) {
	echo "\$nothing is SET\n";
} else {
	echo "\$nothing is NOT SET\n";
}

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

if (empty($nothing)) {
	echo "\$nothing is EMPTY\n";
} else {
	echo "\$nothing is NOT EMPTY!\n";
}

// TEST: If var $something is set, display '$something is SET'

if (isset($something)) {
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