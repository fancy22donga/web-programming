<!--
<?php
date_default_timezone_set("Asia/Kolkata");
$a=date("d-m-Y");
$b=date("h:i:s");
echo $a;
echo "<br>";
echo $b;
?>
-->
<html>
<body>
<center>
<meta http-equiv="refresh" content="1">
<style>
body 
{
  color:red;
  padding-top:50px;
  font-family:'digital-7 (italic).ttf';
}
@font-face
{
  font-family:'digital-7 (italic).ttf';
  src: url('digital-7 (italic).ttf');
}
</style>
<table bgcolor="black" border=2">
<tr>
	<td>
	<?php
	date_default_timezone_set("Asia/Kolkata");
	$a=date("h");
	echo $a;
	?>
	</td>
	<td>
	:
	</td>
	<td>
	<?php
	date_default_timezone_set("Asia/Kolkata");
	$b=date("i");
	echo $b;
	?>
	</td>
	<td>
	:
	</td>
	<td>
	<?php
	date_default_timezone_set("Asia/Kolkata");
	$c=date("s"); 
	echo $c;
	?>
	</td>
</tr>
</table>
</center>
</body>
</html>