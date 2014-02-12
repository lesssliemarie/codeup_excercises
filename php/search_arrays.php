<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function searchArrays($name, $array) {

	$result = array_search($name, $array);
	return $result;

	// if ($result) {
	// 	echo "TRUE";
	// 	return TRUE;
	// } else {
	// 	return FALSE;
	// }
}

 echo searchArrays('Tina', $names) . PHP_EOL;

?>