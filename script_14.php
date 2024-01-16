<html>
<body>
    <form mwthod="post">
	   number:<input type="number" name="number">
	          <input type="submit" name="submit">
	</form>
</body>
</html>
<?php
if (isset($_REQUEST['number']))
{
$n=$_REQUEST['number'];
$sum=0;

for($i=1 ; $i<=$n ; $i++)
{
    $sum+=$i;
}
echo "sum is :$sum";
}
?>