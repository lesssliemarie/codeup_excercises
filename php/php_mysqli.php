<?php
// Connect to database
$mysqli = @new mysqli('127.0.0.1', 'queenbee', 'b8z92u9z', 'codeup_mysqli_test_db');

// Check for errors
if ($mysqli->connect_errno) {
	echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error . PHP_EOL;
} else {
	echo $mysqli->host_info . PHP_EOL;
}

// Create query to create table and assign to var
$query = 'CREATE TABLE users (
	id INT unsigned NOT NULL AUTO_INCREMENT,
	name VARCHAR(240) NOT NULL,
	location VARCHAR(240) NOT NULL,
	description VARCHAR(600) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres FLOAT NOT NULL,
	PRIMARY KEY (id)
	);';

// Run query, if there are errors then display them
if (!$mysqli->query($query)) {
    throw new Exception("Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error);
}

?>