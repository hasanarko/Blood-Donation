<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "blood");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

print_r($_POST);
print_r($_SESSION);
if(isset($_POST["del"])){
	
	
	$sql = "Delete from user where Uname='".$_POST["del"]."'";
	
	
	if(mysqli_query($conn, $sql)){
		
		header('Location: show.php');
		echo "Successfulls";
	}
	else
	{
		echo "Error";
	
    }
}
else{
	
	//header('Location: DonnerRegister.php');
	echo "Error No data came";
}
?>
