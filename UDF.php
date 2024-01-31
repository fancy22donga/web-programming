<html>
<body>

	<form>
		ENTER NUMBER1:<input type="text" name="num1" />
		</br>
		ENTER NUMBER2:<input type="text" name="num2" />
					 <input type="submit" />
	</form>
</body>
</html>
<?php
error_reporting(0);
$val1=$_REQUEST['num1'];
$val2=$_REQUEST['num2'];

function mul($val1,$val2)
{
	return $val1-$val2;
}

function add($val1,$val2)
{
	return $val1+$val2;
}

function sub($val1,$val2)
{
	return $val1*$val2;
}

$multiplication=mul($val1,$val2);
echo "multiplication is:".$multiplication;
echo "<br>";

$addition=add($val1,$val2);
echo "addition is:".$addition;
echo "<br>";

$subtraction=sub($val1,$val2);
echo "subtraction is:".$subtraction;
echo "<br>";

?>