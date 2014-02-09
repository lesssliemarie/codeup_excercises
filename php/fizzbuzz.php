<?php

// print numbers 1 to 100
// multiples of 3 should say fizz
// multiples of 5 should say Buzz
// multiples of both 3 and 5 should say fizzBuzz
for ($i = 1; $i <= 100; $i++) {

	$fizz = ($i % 3 == 0);
	$Buzz = ($i % 5 == 0);
		
	if ($fizz) {
		echo "fizz";
	}

	if ($Buzz) {
		echo "Buzz";
	}

	if (!$fizz&&!$Buzz) {
		echo "$i";
	}

	echo "\n";
}

?>