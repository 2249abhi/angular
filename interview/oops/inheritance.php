<?php
error_reporting( E_ALL);
ini_set('display_errors', 1);

interface Info
{
	public function firstname();

	public function lastname($lname);
}


/*
Inheretence is the process in which object one class acquire the property of object of another class.
*/

//inheritance
class Parents implements Info
{

	function __construct()
	{
		return "Parent Class Constructor</br>";
	}

	public function firstname()
	{
		return "The father name is rakesh";
	}

	function lastname($lname)
	{
		return " ".$lname."<br>";
	}
}

class Childs extends Parents
{
	function __construct()
	{
		return "Child Class Constructor</br>";
	}

	public function firstname()
	{
		return "The son name is harry";
	}
}


$pobj = new Parents();
$cobj = new Childs();

echo $pobj->firstname();
echo $pobj->lastname('tiwari');

echo "<br><br>";
echo $cobj->firstname();
echo $cobj->lastname('tiwari');
