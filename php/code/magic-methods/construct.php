<?php
//__construct is called when an object of a class is created. It is the first method which is called when object is created.
class Animal
{
	public function __construct() {
		echo "Object is created<br/>";
	}
}

$dog = new Animal(); // __construct() is called