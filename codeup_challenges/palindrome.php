<?php

// Create a function so that it will return a bool value true
// If the word is a palindrome

function is_palindrome($word) {
	$word = strtolower(str_replace(' ', '', $word));
	$reverse = strrev($word);
	if ($word == $reverse) {
		return TRUE;
	} else {
		return FALSE;
	}
}

function runTest($word) {
	if (is_palindrome($word)) {
		echo $word . ' is a palindrome! ' . strrev($word) . PHP_EOL;
	} else {
		echo $word . ' is NOT a palindrome :(' . PHP_EOL;
	}
}

// Test several known palindromes
runTest('Amore Roma');
runTest('A man a plan a canal Panama');
runTest("No x in Nixon");

// Test regular words

runTest('Jimi');
runTest('Leslie Marie');
runTest('Stressed Desserts');

?>