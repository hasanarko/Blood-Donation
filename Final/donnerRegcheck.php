<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "blood");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

print_r($_POST);
print_r($_SESSION);
if(isset($_POST["blood"]) && isset($_POST["bdate"])  && isset($_POST["Answer"])){
	
	
	$sql = "UPDATE user set Blood='".$_POST["blood"]."', Birthdate='".$_POST["bdate"]."', Answer='".$_POST["Answer"]."' where Uname='".$_SESSION["Uname"]."'";
	
	
	if(mysqli_query($conn, $sql)){
		
		header('Location: donnerpro.php');
	}
	else
	{
		header('Location: userpro.php');
	
    }
}
else{
	
	header('Location: DonnerRegister.php');
}
?>