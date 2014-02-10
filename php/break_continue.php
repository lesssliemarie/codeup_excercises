<?php

// create a for loop that shows all even numbers between 1 and 100
// using continue
// for ($i = 1; $i <= 100; $i++) {

// 	if ($i % 2 != 0) {
// 		continue;
// 	}
// 	echo $i . "\n";
// }

// create a for loop that counts from 1 to 100
// stop it at 10 using a break
for ($i = 1; $i <= 100; $i++) {

	echo $i . "\n";

	if ($i > 10) {
		break;
	}
}

?>