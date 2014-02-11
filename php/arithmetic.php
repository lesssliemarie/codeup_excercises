<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a + $b . "\n";	
	} else {
		echo "ERROR: You didn't pass two numbers to add, silly goose!\n";
	}	
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a - $b . "\n";	
	} else {
		echo "ERROR: You didn't pass two numbers to add, silly goose!\n";
	}	
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a * $b . "\n";	
	} else {
		echo "ERROR: You didn't pass two numbers to add, silly goose!\n";
	}	
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a / $b . "\n";	
	} else {
		echo "ERROR: You didn't pass two numbers to add, silly goose!\n";
	}	
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b . "\n";	
	} else {
		echo "ERROR: You didn't pass two numbers to add, silly goose!\n";
	}	
}

add('cat', 2);
subtract(10, 1);
multiply(2, 6);
divide(50, 'dog');
modulus(10, 3);

?>