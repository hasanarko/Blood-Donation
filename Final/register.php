<?php
     $UnameErr = $passErr = $cpassErr = $emailErr = $phonenoErr = $fullnameErr = $districtErr = $genderErr = "";
      $Uname = $pass = $cpass = $email = $phoneno = $fullname = $district = $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Uname"])) {
    $UnameErr = "Name is required";
  } else {
    $Uname = test_input($_POST["Uname"]);
  }
    /*if (0 === preg_match("/^[A-Za-z ]*$/",$_Post["Uname"])) {
      $UnameErr = "Only letters and white space allowed"; 
    }*/

  if (empty($_POST["pass"])) {
    $passErr = "password is required";
  } 
	else {
    $pass = test_input($_POST["pass"]);
  }
 if (empty($_POST["cpass"])) {
    $cpassErr = "confirm password is required";
  } 
	else {
    $cpass = test_input($_POST["cpass"]);
  }
  if (empty($_POST["email"])) {
    $emailErr = "email is required";
  } 
	else {
    $email = test_input($_POST["email"]);
	}
	if (preg_match("/([w-]+@[w-]+.[w-]+)/",$_POST["email"]))
	{
		  $emailErr = "Invalid Email"; 
    }
 if (empty($_POST["phoneno"])) {
    $phonenoErr = "phoneno is required";
  } 
	else {
    $phoneno = test_input($_POST["phoneno"]);
  }
  if (empty($_POST["fullname"])) {
    $fullnameErr = "fullname is required";
  } 
	else {
    $fullname = test_input($_POST["fullname"]);
  }
}
 if (empty($_POST["district"])) {
    $districtErr = "Select any district";
  } 
	else {
    $district = test_input($_POST["district"]);
  }
 if (empty($_POST["gender"])) {
    $genderErr = "Select any option";
  } 
	else {
    $gender = test_input($_POST["gender"]);
  }
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
 
}
?>


<html> 
<head>

</head> 
<body background="bld.jpg">
		  		  
<form action="userregcheck.php" method="post">

		   <table  align="center" border ="1px">
	<tr>	  
  <th>
  <h1>Register</h1>
  </th>
</tr>
<th>
<table>
<tr><td><font style="background-color:white;">User name:</font></td><td> <input type="text" name="Uname" required></td></tr>
<tr><td><font style="background-color:white;">Password:</font> </td><td><input type="password" name="pass" required></td></tr>
<tr><td><font style="background-color:white;">Confirm Password:</font></td><td><input type="password" name="cpass" required></td></tr>
<tr><td><font style="background-color:white;">E-mail:</font> </td><td><input type="text" name="email" required></td></tr>
<tr><td><font style="background-color:white;">Mobile No:</font> </td><td><input type="text" name="phoneno" required></td></tr>
<tr><td><font style="background-color:white;">Full Name:</font></td><td><input type="text" name="fullname" required></td></tr>
<tr><td><font style="background-color:white;">Gender:</font><td>
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other</td></tr>
  <tr><td><font style="background-color:white;">District:</font></td><td> 
<select name="district" required>
  <option value="dhaka">Dhaka</option>
  <option value="barisal">Narayangonj</option>
  <option value="gazipur">Gazipur</option>
  <option value="tangail">Tangail</option>
  <option value="dhaka">Munshigonj</option>
  <option value="barisal">Chattagram</option>
  <option value="gazipur">Cumilla</option>
  <option value="tangail">Feni</option>
  <option value="dhaka">Nowakhali</option>
  <option value="barisal">Barisal</option>
  <option value="gazipur">Borguna</option>
  <option value="pirozpur">Pirozpur</option>
</select>
</td></tr>

</table>
<pre>   
      <input type="reset">     <input type="submit" name="submit" value="Submit">  
	  </pre><br>
	   </th>
</table>

</form>
</body>
</html>