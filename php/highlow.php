<?php
// check for 3 arguments that are numeric
if ($argc == 3 && is_numeric($argv[1]) && is_numeric($argv[2]) && $argv[1] < $argv[2]) {
	$min = intval($argv[1]);
	$max = intval($argv[2]);
	$answer = mt_rand($min, $max);
	fwrite(STDOUT, "So you want to guess a number between $min and $max huh?\nGo for it.\n");
} else {
// otherwise play with 1 and 100 and ask for first guess
	$answer = mt_rand(1, 100);
	fwrite(STDOUT, "You didn't pass the right arguments to set your number range.\nPlay with mine instead!\nGuess a number between 1 and 100\n");
}

// first guess
$playerGuess = fgets(STDIN);

// initiate guess count
$numOfGuesses = 1;

// loop through guessing process while $playerGuess is not equal to $answer
while ($playerGuess != $answer) {
	// give higher or lower hint
	if ($playerGuess < $answer) {
		echo "HIGHER! ";	
	} else  {
		echo "LOWER! ";
	} 
	// get new guess from player	
	fwrite(STDOUT, "Guess again!\n");
	$playerGuess = fgets(STDIN);
	// increment guess count
	$numOfGuesses++;

} 

// tell player they are right
echo "GOOD GUESS!\n";	

// display the number of guesses it took to match $answer
if ($numOfGuesses == 1) {
	echo "Are you a mind reader?\n";
} else {
	echo "It took you $numOfGuesses tries to guess my number, dummy.\n";
}

exit(0);

?>