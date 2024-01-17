<html>
<body>
	<form method="post">
	number1:<input type="number" name="number1">
	number2:<input type="number" name="number2">
	<input type="submit" name="submit">
	</form>
</body>

</html>

<?php
	if (isset($_REQUEST['number1']) && isset($_REQUEST['number2']) )
	{
		$x=$_REQUEST['number1'];
		$y=$_REQUEST['number2'];

		echo"before swapping :$x & $y";

			$x=$x+$y;
			$y=$x-$y;
			$x=$x-$y;
			
		echo"after swapping is:$x & $y";
	}
?>