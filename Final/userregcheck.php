<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "blood");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

print_r($_POST);
if(isset($_POST["Uname"]) && isset($_POST["pass"])  && isset($_POST["phoneno"])  && isset($_POST["email"])   && isset($_POST["fullname"]) && $_POST["pass"]==$_POST["cpass"] && strlen($_POST["pass"])>=6 && strlen($_POST["Uname"])>=5 && strlen($_POST["Uname"])<8 && strlen($_POST["phoneno"])>=11 && strlen($_POST["fullname"])>8){
	
	$sql="INSERT INTO login (Uname,password,catagory,dlt) values('".$_POST['Uname']."','".$_POST['pass']."','user',0)";
	//echo $sql;
	if(mysqli_query($conn, $sql)){
		echo "New records updated successfully";
	}
	$sql = "INSERT INTO user (Uname,Name,Email,Mobile,District,Gender) values('".$_POST['Uname']."','".$_POST['fullname']."','".$_POST['email']."','".$_POST['phoneno']."','".$_POST['district']."','".$_POST['gender']."')";
	
	echo $sql;
	if(mysqli_query($conn, $sql)){
		$_SESSION[Uname] = $_POST["Uname"];
		header('Location: want.php');
	}
}
else{
	header('Location: register.php');
}
?>