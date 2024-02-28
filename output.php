<?php
$uname=$_REQUEST['uname'];
$pw=$_REQUEST['pw'];
$firstname=$_REQUEST['my_firstname'];
$lastname=$_REQUEST['my_lastname'];
$email=$_REQUEST['email'];
$mno=$_REQUEST['mno'];
$address=$_REQUEST['add'];

echo "<table border=1 >
      <tr><td>username:</td><td>$uname</td></tr>
      <tr><td>password:</td><td>$pw</td></tr> 
      <tr><td>first name:</td><td>$firstname</td></tr>
      <tr><td>last name:</td><td>$lastname</td></tr>
	   <tr><td>email:</td><td>$email</td></tr>
	  <tr><td>Mobile no.:</td><td>$mno</td></tr> 
	 <tr><td>address:</td><td>$address</td></tr>
	  
	  </table>";
?>