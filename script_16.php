<html>
<body>
	<form method="post">
		write text here:<textarea name="sentence"></textarea>
		
		<input type="submit name="submit">
</body>
</html>
<?php

$text=$_REQUEST['sentence'];

	$str = strtolower($text);
	$coV = 0;
	$coC = 0;
	$len = strlen($text);
	for ($i = 0; $i < $len; $i++)
	{
		if ($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u')
		{
			$coV += 1;
		}
    else if ($str[$i] >='a' && $str[$i] <= 'z')
    {
       $coC += 1;
	}
     else
	 {}
	}
	echo "Number of Vowels is $coV \n";
	echo "Number of Consonants is $coC";
	
?>