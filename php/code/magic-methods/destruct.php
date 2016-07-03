<?php
//__destruct is called when object of a class is destroyed
class Animal
{
	public function __construct() {
		echo "Object is created<br/>";
	}

	public function __destruct() {
		echo "Object is destroyed<br/>";
	}

}

$dog = new Animal(); // __construct() is called
unset($dog); // __destruct is called