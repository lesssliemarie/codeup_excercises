<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
// Create a function that returns TRUE if array value is found or FALSE
function searchArrays($value, $array) {

	$result = array_search($value, $array);

	if ($result === FALSE) {
		return FALSE;
	}
	return TRUE;	

}

// Search for Tina and Bob in $names
// Tina should return TRUE – check
// Bob should return FALSE - check
var_dump(searchArrays('Tina', $names));
var_dump(searchArrays('Bob', $names));

function compare($array1, $array2) {

	$commonValues = 0;

	foreach ($array1 as $key => $value) {
		$isCommon = is_numeric(array_search($value, $array2));
		if ($isCommon) {
			$commonValues++;
		}
	}
	return $commonValues;
}

echo 'These arrays have ' . compare($names, $compare) . ' values in common!' . PHP_EOL;


?>