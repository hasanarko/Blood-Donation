<html> 
<head>


</head> 
<body background="bld.jpg">
		  		  
<form action="donnerRegcheck.php" method="post">

	<table  align="center" border ="1px">
	<tr>	  
  <th>
  <h1>Register</h1>
  </th>
</tr>
<th>
<table>

<tr><td><font style="background-color:white;">Blood Group:</font></td><td> 
<select name="blood">
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="O+">O+</option>
  <option value="A-">A-</option>
  <option value="B-">B-</option>
  <option value="AB-">AB-</option>
  <option value="O-">O-</option>
  </select>
  </td></tr>
  <tr><td><font style="background-color:white;">Birth Date</font></td>
  <td><input type="date" name="bdate"></td></tr>
  <table>
  <tr><td><font style="background-color:white;">Are you agree to donate blood?</font></td></tr>
<tr><td><input type="radio" name="Answer" value="Yes"> Yes
  <input type="radio" name="Answer" value="No"> No</td></tr>
</table>
<pre>
      <input type="reset">       <input type="submit" name="submit" value="Submit">
	 
</pre>

</form>

</table>

</body>
</html>