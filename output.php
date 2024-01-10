<?php
$firstname=$_REQUEST['my_firstname'];
$lastname=$_REQUEST['my_lastname'];
$class=$_REQUEST['class'];
$division=$_REQUEST['div'];
$city=$_REQUEST['my_city'];
$address=$_REQUEST['add'];
$mobile_no=$_REQUEST['mob_no'];
$pincode=$_REQUEST['pin'];
$state=$_REQUEST['my_state'];
$country=$_REQUEST['my_country']; 

echo "<table border=1 >
      <tr><td>first name:</td><td>$firstname</td></tr>
      <tr><td>last name:</td><td>$lastname</td></tr>
	  <tr><td>class:</td><td>$class</td></tr>
	  <tr><td>division<td>$division></td></tr>
	  <tr><td>city:</td><td>$city</td></tr>
	  <tr><td>address:</td><td>$address</td></tr>
	  <tr><td>mobile no:</td><td>$mobile_no</td></tr>
	  <tr><td>pincode:</td><td>$pincode</td></tr>
	  <tr><td>state:</td><td>$state</td></tr>
	  <tr><td>country:</td><td>$country</td></tr>
	  </table>";
?>