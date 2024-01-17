<html>
<body>
	<form method="post">
		Radius:<input type="number" name="Radius">;
				<input type="submit" name="submit">;
	</form>
</body>
</html>

<?php
		
			$ra=$_REQUEST['Radius']
			$pi=3.14;

			$radius=$ra*$ra*$pi;

			echo"the area of circle is:$raduis";
		
?>