<?php
/*
	Data Types:

	String
	Integer
	Float (floating point numbers - also called double)
	Boolean
	Array
	Object
	NULL
	Resource - The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
*/

// String Data Type:
$string = 'Hi Wasek'; //This is String(Everything in Quote) Data Type
var_dump($string);
echo'<br/><br/>';


// Integer Data Type:
$int = 1234567890; //This is Integer(Everything Without Quote and Solid Number) Data Type
var_dump($int);
echo'<br/><br/>';


// Float Data Type:
$float = 654.565; //This is Float(Everything Without Quote and Not Solid Number) Data Type
var_dump($float);
echo'<br/><br/>';


// Array Data Type:
$arr = array('Zero', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven'); //This is Array Data Type
var_dump($arr);
echo'<br/><br/>';


// Boolean Data Type:
$bool = true; //This is Boolean(True or False) Data Type
var_dump($bool);
echo'<br/><br/>';

// Object Data Type:
class School {
	function school(){
		$this->subject = "Biology";
	}
}
$object = new School(); //This is Object Data Type
echo $object->subject; //Output
echo'<br/>';
var_dump($object);
echo'<br/><br/>';


// Null Data Type:
$nul = null; //This is Null(No Value) Data Type
var_dump($nul);