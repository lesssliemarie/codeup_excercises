<?php

// prompt a user for a starting number
fwrite(STDOUT, "Enter a starting number, yo.\n");

// make the input an integer and assign it to a $startingNum variable
$startingNum = intval(trim(fgets(STDIN)));

// prompt a user for a ending number
fwrite(STDOUT, "And an ending number, yo.\n");

// make the input an integer and assign it to a $endingNum variable
$endingNum = intval(trim(fgets(STDIN)));


// display athe range of numbers from start to end using a for loop
for ($i = $startingNum; $i <= $endingNum; $i++) {
	echo "$i\n";
}


?>