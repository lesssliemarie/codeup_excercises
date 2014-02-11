<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a + $b . "\n";	
	} else {
		echo "ERROR: You can't add $a and $b together, silly goose!\n";
	}	
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a - $b . "\n";	
	} else {
		echo "ERROR: You can't subtract $b from $a, silly goose!\n";
	}	
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a * $b . "\n";	
	} else {
		echo "ERROR: You can't multiply $a and $b, silly goose!\n";
	}	
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if ($b != 0) {
		 	echo $a / $b . "\n";
		} else {
			echo "You can't divide by 0! DUH\n";
		}
	} else {
		echo "ERROR: You can't divide $b by $a, silly goose!\n";
	}	
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b . "\n";	
	} else {
		echo "ERROR: You can't get the remainder of $a divided by $b, silly goose!\n";
	}	
}

add('cat', 2);
subtract(10, 1);
multiply(2, 'cheese');
divide(50, 0);
modulus(10, 3);

?>