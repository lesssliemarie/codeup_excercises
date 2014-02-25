<?php

function get_index($indexKey) {
    $file = 'data/diceware.wordlist.txt';
    $handle = fopen($file, "r");
    $contents = fread($handle, filesize($file));
    fclose($handle);
    // grab index number from contents
    explode("\n", $contents)

    return $indexValue;
}

function gen_index() {
	$indexKey = '';
	for ($i = 1; $i <=5; $i++) {
		$roll = rand(1, 6);
		$indexKey .= $roll;
	}
	return $indexKey;
}

// ask user for number of words
echo 'How many words do you want to generate? ';
$numWords = trim(fgets(STDIN));

// echo gen_index() . PHP_EOL;
// run index key and get index for $numWords
$indexKey = gen_index();
get_index($indexKey);


?>