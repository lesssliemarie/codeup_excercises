<?php
// Create a funciton that accpets a string
// and will return the string in alphabetical order
// EX: "hello world" becomes "ehllo dlorw"
// Separate and alphabetize each word individually

function alphabet_soup($str) {
	// split string by word into an array
	$strArray = str_word_count($str, 1);
	$soupSentence = '';
	// iterate over array 
	foreach($strArray as $word) {
		// split words into separate arrays and sort
		$wordArray = str_split($word);
		sort($wordArray);
		// implode them back to strings and add to empty soupSentence
		$word = implode('', $wordArray);
		$soupSentence .= $word . ' ';
		
	}
	return $soupSentence . PHP_EOL;
}

echo alphabet_soup("hello world");
echo alphabet_soup("leslie marie");
echo alphabet_soup("jimi jims");
echo alphabet_soup("hello codeup");
echo alphabet_soup("richard ortega");

?>