<html>
<body>
   <form method="post">
     celsius:<input type="number" name="celsius">
			 <input type="submit" name="submit">
   </form>			
   
</body>
</html>
<?php

 if (isset($_REQUEST['celsius']) )
   {
   $ce=$_REQUEST['celsius'];
   $fahrenheit=(($ce*9)/5)+32;
   
   echo "temperature is:$fahrenheit";
   }
?>
