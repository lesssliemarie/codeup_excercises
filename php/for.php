<?php



$startGame = true;
// prompt a user for a starting number, ending number, and increment to count by
do {
	fwrite(STDOUT, "Enter a starting number, yo.\n");
	$startingNum = intval(trim(fgets(STDIN))); 

	fwrite(STDOUT, "And an ending number.\n");
	$endingNum = intval(trim(fgets(STDIN)));

	fwrite(STDOUT, "What number do you want to count by?\n");
	$countBy = intval(trim(fgets(STDIN)));

// loop using increment of 1 if no increment was input
	if ($countBy == 0) {
		echo "Can't decide? Let's just use 1.\n";
		$countBy = 1;
		echo "COUNT IT:\n";
		for ($i = $startingNum; $i <= $endingNum; $i += $countBy) {
			echo "$i\n";
			$startGame = false;
		}
// loop for positive increments when $startingNum is less than $endingNum	 
	}	elseif ($countBy > 0 && $startingNum < $endingNum) {
		echo "COUNT IT:\n";
		for ($i = $startingNum; $i <= $endingNum; $i += $countBy) {
			echo "$i\n";
			$startGame = false;
		}
// loop for negative increments when $startingNum is greater than $endingNum
	} elseif ($countBy < 0 && $startingNum > $endingNum) {
		echo "COUNT IT:\n";
		$countBy = abs($countBy);
		for ($i = $startingNum; $i >= $endingNum; $i -= $countBy) {
			echo "$i\n";
			$startGame = false;
		}
// when users increments and numbers don't count up or down properly
	} else {
			
			echo "Do you know how counting up or down works?\nLet's try entering those numbers again...\n";
	}

} while ($startGame == true);


?>