<html>
<body>
	<form method="post">
	year:<input type="number" name="number">
	     <input type="submit" name="submit">
	</form>
</body>
</html>
<?php

$n=$_REQUEST['number'];

$num = (string) $n;
$revstr = strrev($num);

if($num==$revstr)
{
	echo "this is palindrome number";
}
else
{
	echo "this is not palindrome number";
}
?>