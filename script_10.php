<html>
<body>
	<form method="post">
		Width:<input type="number" name="width">
		Length:<input type="number" name="length">
	
		<input type="submit" name="submit">
	</form>
	
</body>
</html>
<?php
	if (isset($_REQUEST['width']) && isset($_REQUEST['length']))
	{
		$wt= $_REQUEST['width'];
		$lt= $_REQUEST['length'];
		
		$area=$wt*$lt;
		
		echo "The area of rectangle is: $area";
	}


?>