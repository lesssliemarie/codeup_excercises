<?php
// Connect to database
$mysqli = @new mysqli('127.0.0.1', 'queenbee', 'b8z92u9z', 'codeup_mysqli_test_db');

// Check for errors
if ($mysqli->connect_errno) {
	echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error . PHP_EOL;
} else {
	echo $mysqli->host_info . PHP_EOL;
}


?>