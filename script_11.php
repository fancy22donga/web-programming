<html>
<body>
	<form method="post">
		Number:<input type="number" name="number">
			   <input type="submit" name="submit">
	</form>
</body>
</html>

<?php
if (isset($_REQUEST['number']) )
{
	$num=$_REQUEST['number'];
	
	if($num%2==0)
	{
		echo "$num is even";
	}
	else
	{
		echo "$num is odd";
    }
}
?>