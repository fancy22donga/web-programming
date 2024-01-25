<?php

#index array
$student=array("abc","xyz","pqr","stu","vcx","nmo",20,40,50,60);
print_r($student);
foreach($student as $mytemp)
{
	echo $mytemp;
	echo "<br>";
}
echo "<br>";


#associative array
$student_details=array("name"=>"fancy","department"=>"BCA","rollno"=>"08","division"=>"b2","university"=>"atmiya","address"=>"haridham sociaty","city"=>"rajkot","number"=>"4456565655","state"=>"gujarat","country"=>"india");
foreach($student_details as $std)
{
	echo $std;
	echo "<br>";
	
}

echo"<br>";


#multidimential
$student_master=array(array(1,2,3),array(4,5,6),array(7,8,9),array(10,11,12),array(13,14,15),array(16,17,18),array(19,20,21),array(22,23,24));
foreach($student_master as $row)
{
	foreach($row as $value)
	{
		echo "$value";
	}
	echo "<br>";
}
?>