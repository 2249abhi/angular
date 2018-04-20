<?php

$arr = array(5,3,1,6,7,4,8,2);

for ($i = 0;$i< count($arr); $i++)
{

	for($j=0;$j<$i;$j++)
	{
		if($arr[$i] < $arr[$j])
		{
			$temp = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $temp;
		}
	}
}

print_r($arr);