<?php
//reverse string without php
$val = "abhishek"; 
 $len = strlen($val);

 for($i=$len;$i>=0;$i--)
 {
 	echo $val[$i];
 }

 //echo $val[3];// print 3rd character of string