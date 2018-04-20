<?php

include 'namespaceclass.php';


//echo \My_Namespace\My_Class::my_method();

//echo \My_Namespace\testnamespacefunc();

/*//first way
echo "Constant: " . \abcd\efgh\ijkl\MYCONST . "<br>";
echo "function: " .\abcd\efgh\ijkl\MyFunction() . "<br>";
echo "function from class : " .\abcd\efgh\ijkl\MyClass::WhoAmI() . "<br>";*/

//second way
use \abcd\efgh\ijkl as ns;

echo "Constant: " . ns\MYCONST . "<br>";
echo "function: " .ns\MyFunction() . "<br>";
echo "function from class : " . ns\MyClass::WhoAmI() . "<br>";
