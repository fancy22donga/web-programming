<html>
<body>
	<form method="post">
	number:<input type="number" name="number">
	       <input type="submit" name="submit">
	</form>
</body>
</html>

<?php
	if (isset($_REQUEST['number']))
	{
		$n=$_REQUEST['number'];
		$square=$n*$n;
		
		echo"the square root of $n is:$square";
	}
?>
	