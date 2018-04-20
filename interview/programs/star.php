<?php

/*$x = "ab";  
$$x = 200;  
echo $x."<br/>";  
echo $$x."<br/>";  
echo $ab;  
*/
$a = '1';
$b = &$a;
$b = "2$b";
echo $a.", ".$b;

/*
******
*****
****
***
**
*


for($i=0;$i <= 5;$i++)
{

	for($j=5-$i;$j>=0;$j--)
	{
		echo "*";
	}
	echo "<br>";
}
*/


/*

*
**
***
****
*****


for($i=0;$i<6;$i++)
{
	for($j=0;$j<$i;$j++)
	{
		echo " ".$j;
	}

	echo "<br>";
}
*/