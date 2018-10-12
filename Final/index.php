<html lang="en">
<head>
<title>Home page</title>
<meta charset="utf-8">
<?php
session_start();
	if(isset($_SESSION["Uname"]))
	{
		
		//header("Location: userpro.php");
	}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 {
    box-sizing: border-box;
}

body {
  margin: 0;
}

.header {
    background-color: powderblue;
    padding: 10px;
    text-align: center;
}

.topnav {
    overflow: hidden;
    background-color: #333;
}

.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 16px 18px;
    text-decoration: none;
}

.topnav a:hover {
    background-color: #ddd;
    color: blue;
}
h1{
	color: green;
}
p{
	color: blue;
}
.btn {
    border: none;
    color: white;
    padding: 7px 20px;
    font-size: 8px;
    cursor: pointer;
}

.success {background-color: #4CAF50;} /* Blue */
.success:hover {background-color: #46a049;}
</style>
</head>
<body align="center" >
<div class="header">
  <h1>Donate Blood Save Lives</h1>
 
</div>
<div class="topnav">
<a href="home.php">Home</a>
     <a href="#">Contribute</a>
	 <a href="register.php">Registration</a>
	 <a href="#"> Contact</a>
      <a href="#">About</a>

      <form method="post" action="loginc.php">
        <font style="background-color:skyblue;"> Username</font> <input type="text" name="Uname" required>
        <font style="background-color:skyblue;">Password</font> <input type="password" name="pass" required>
        <button class="btn success">Login</button>
    </form>
    
</div>

<form method="post" action="loginc.php"><br>

 <body background="blood1.jpg">
 <style>

div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 50%;
    height: 200px;
	font-size:14pt;
}

div.desc {
    padding: 15px;
    text-align: center;
}

a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}
	
</style>

<a href ="sblood.php">A+</a>
<a href ="bblood.php">B+</a>
<a href ="abbld.php">AB+</a>
<a href ="oblood.php">O+</a><br><br><br>
<a href ="a!blood.php">A-</a>
<a href ="b!blood.php">B-</a>
<a href ="ab!bld.php">AB-</a>
<a href ="o!bld.php">O-</a>

</body>

</html>
