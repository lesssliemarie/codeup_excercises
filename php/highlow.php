<?php
//game picks random number between 1 and 100
$answer = mt_rand(1, 100);

// prompts user to guess the number
fwrite(STDOUT, "Guess a number between 1 and 100\n");

$playerGuess = fgets(STDIN);

$numOfGuesses = 0;

// loop through guessing process while $playerGuess is not equal to $answer
while ($playerGuess != $answer) {
	//GIVE HIGHER OR LOWER HINT
	if ($playerGuess < $answer) {
		echo "HIGHER! ";	
	} else  {
		echo "LOWER! ";
	} 
		
	fwrite(STDOUT, "Guess again!\n");
	$playerGuess = fgets(STDIN);
	//add to $num_of_guesses
	$numOfGuesses++;

} 

// tell player they are right
echo "GOOD GUESS!\n";	

//display the number of guesses it took to match $answer
echo "It took you $numOfGuesses tries to guess my number, dummy.\n";

exit(0);

?>