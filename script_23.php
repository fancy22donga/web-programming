<?php
	$num1=10;
	$num2=20;
	$num3=40;
	
	if($num1>$num2 && $num1>$num3)
	{
		echo"the largest number is:$num1";
	}
	
	else
	{
		if($num2>$num1 && $num2>$num3)
		{
			echo"the largest number is:$num2";
		}
		else
		echo"the largest number is:$num3";
	}
?>