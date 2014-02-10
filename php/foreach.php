<?php

// create an array of things
$things = array('Sgt. Pepper', "11", null, array(1, 2, 3), 3.14, "12 + 7", false, (string) 11);

// create a loop that iterates through the array
// output ONLY the values that are scalar
foreach ($things as $thing) {
	
	if (is_scalar($thing)) {
		echo "$thing\n";
	}
}

?>