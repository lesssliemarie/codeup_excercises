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

if (isset($nothing)) {
	echo "\$nothing is SET\n";
} 

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

if (empty($nothing)) {
	echo "\$nothing is EMPTY\n";
}

// TEST: If var $something is set, display '$something is SET'
// UPDATE TEST: change to check if empty, what does it do?
// ^ both will evaluate to TRUE

if (isset($something)) {
	echo "\$something is SET\n";
}

if (empty($something)) {
	echo "\$something is EMPTY\n";
}

// Serialize the array $array, and output the results

$serialize = serialize($array);
echo "This is a serialized array:\n" . $serialize . "\n";

// Unserialize the array $array, and output the results

$unserialize = unserialize($serialize);
var_dump($unserialize) . "\n";

?>