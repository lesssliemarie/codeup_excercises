<?php

class Hello {

	public static $defaultMessage = 'Hello, World!';
}

// $h1 = new Hello();

// echo $h1->defaultMessage . PHP_EOL;

echo Hello::$defaultMessage . PHP_EOL;

?>