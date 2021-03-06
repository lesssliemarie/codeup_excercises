<?php
// create an array of $books

$books = array(
	'The Hobbit' => array(
		'published' => 1937,
		'author' => 'J.R.R. Tolkien',
		'pages' => 310
		),

	'Game of Thrones' => array(
		'published' => 1996,
		'author' => 'George R.R. Martin',
		'pages' => 835
		),

	'The Catcher in the Rye' => array(
		'published' => 1951,
		'author' => 'J.D. Salinger',
		'pages' => 220
 		),

	'A Tale of Two Cities' => array(
		'published' => 1859,
		'author' => 'Charles Dickens',
		'pages' => 544
 		),
	);

// construct a loop that iterates through each book
// then each book's keys and values
// output the book's title, then list the key value pairs
// ONLY for books written after 1950

foreach ($books as $title => $book) {

	if ($book['published'] > 1950) {
		echo strtoupper("$title\n");
		echo "  Published: " . $book['published'] . "\n";
		echo "  Author: " . $book['author'] . "\n";
		echo "  Pages: " . $book['pages'] . "\n";
	}
}


?>