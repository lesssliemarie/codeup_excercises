<?php

// create an array of things
$things = array('Sgt. Pepper', "11", null, array(1, 2, 3), 3.14, "12 + 7", false, (string) 11);

// create a loop that iterates through the array
// echo out every value, including those nested in arrays
foreach ($things as $thing) {
	
	if (is_array($thing)) {
		echo "Array containing ";
		foreach ($thing as $items) {
			echo "$items ";
		}	
	}

	if (!is_array($thing)) {
	echo "$thing";		
	}

	echo "\n";

}

?>