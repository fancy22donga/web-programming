<html>
<body>
	<form method="post">
		Number1:<input type="number" name="number1">
		Number2:<input type="number" name="number2">
		Number3:<input type="number" name="number3">
		
	<input type="submit" name="submit">
		
</body>
</html>
<?php
	
	$num1=$_REQUEST['number1'];
	$num2=$_REQUEST['number2'];
	$num3=$_REQUEST['number3'];
	
	if($num1>$num2 && $num1>$num3)
	{
		echo"The largest number is:$num1";
	}
	else
	{
	if($num2>$num1 && $num2>$num3)
	{
		echo"The largest number is : $num2";
	}
	}
?>