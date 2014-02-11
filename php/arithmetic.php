<?php

function validate($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "ERROR: You need two NUMBERS to do math, smartie.\nDo these both look like numbers?\n";
		var_dump($a);
		var_dump($b);
		echo "I'm kicking you out. Try again!\n";
		exit(0);
	} 
}

function add($a, $b) {
	validate($a, $b);
 	echo $a + $b . "\n";		
}

function subtract($a, $b) {
	validate($a, $b);
	echo $a - $b . "\n";	
}

function multiply($a, $b) {
	validate($a, $b);
	echo $a * $b . "\n";		
}

function divide($a, $b) {
	validate($a, $b);
	if ($b != 0) {
		 echo $a / $b . "\n";
	} else {
		echo "You can't divide by 0! DUH\n";
	}		
}

function modulus($a, $b) {
	validate($a, $b);
	echo $a % $b . "\n";		
}

add('cat', 2);
subtract(10, 1);
multiply(2, 'cheese');
divide(50, 0);
modulus(3, 10);

?>