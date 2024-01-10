<html>
<head>
    <style> label,select{border: 2px solid red};
	</style>
<body>
<form action="reg.php" method="get">
<table bgcolor="#ffd7b5" align="center">
      <tr>
      <th colspan="2"> Registration form </th>
	  </tr>
	  <tr>
	  <td>Username:</td>
	  <td><input type="text" style="border-color:red" name="unm"placeholder="enter username"></td>
      </tr>
      <tr>
	  <td>password:</td>
	  <td><input type="text" style="border-color:red" name="pwd"placeholder="enter password"></td>
      </tr>
      <tr>
	  <td>Name:</td>
	  <td><input type="text" style="border-color:red"  name="nm" placeholder="enter name"></td>
      </tr>
      </tr>
      <tr>
	  <td>Address:</td>
	  <td><input type="text" style="border-color:red"  name="add"placeholder="enter address"></td>
      </tr>
      </tr>
      <tr>
	  <td>Country:</td>
	  <td><select name="country">
	      <option value="disable"style="border-color:red" >(please select a country)
          <option value="india">india </option>
          <option value="us">united states </option>
		  <option value="uk">united kinegdom </option>
		  </select></td>
      </tr>
	  <tr>
	  <td>ZIP code:</td>
	  <td><input type="text" style="border-color:red" name="zip"placeholder="enter code"></td>
	  </tr>
	  <tr>
	  <td>Email:</td>
	  <td><input type="text" style="border-color:red"  name="email"placeholder="enter e-mail"></td>
	  </tr>
      <tr>
	  <td>Sex:</td>
	  <td><input type="radio"name="sx" id="sx">
	      <label value="male"style="border-color:red">Male</label>
		  <input type="radio"name="sx" id="sx">
	      <label value="female"style="border-color:red">Female</label></td>
	  </tr>
      <tr>
	  <td>language:</td>
	  <td><input type="checkbox"name="lg" id="sx">
	      <label value="English"style="border-color:red" >English</label>
		  <input type="checkbox"name="lg" id="sx">
	      <label value="Non English"style="border-color:red" >Non English</label></td>
	  </tr>
	  <tr>
	  <td>About:</td>
	  <td><textarea name="ab"></textarea></td>
	  </tr>
	  <tr>
	  <td colspan="2"align="center"><input type="submit" value="submit"style="border-color:red" ></td>
	  </tr> 
</table>
</form>
</body>
</html>