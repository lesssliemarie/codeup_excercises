<?php

// create a for loop that shows all even numbers between 1 and 100
// using continue
for ($i = 0; $i <= 100; $i++) {

	if ($i % 2 != 0) {
		continue;
	}
	echo $i . "\n";
}

?>