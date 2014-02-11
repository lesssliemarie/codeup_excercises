<?php

function paramsAreValid($a, $b) {
	return (is_numeric($a) && is_numeric($b));
}

function add($a, $b) {
	if (paramsAreValid($a, $b)) {
		return $a + $b;
	} else {
		return 0;
	}
}

function subtract($a, $b) {
	if (paramsAreValid($a, $b)) {
		return $a - $b;
	} else {
		return 0;
	}
}

function multiply($a, $b) {
	if (paramsAreValid($a, $b)) {
		return $a * $b;
	} else {
		return 0;
	}	
}

function divide($a, $b) {
	if (paramsAreValid($a, $b)) {
		if ($b != 0) {
			return $a / $b;
		} else {
			return 0;
		}
	}		
}

function modulus($a, $b) {
	if (paramsAreValid($a, $b)) {
		return $a % $b;
	} else {
		return 0;
	}
}

add('cat', 2);
subtract(10, 1);
multiply(2, 'cheese');
divide(50, 0);
modulus(3, 10);

?>