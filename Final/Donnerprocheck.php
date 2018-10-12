<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "blood");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

print_r($_POST);
print_r($_SESSION);
if(isset($_POST["dndate"])){
	
	
	$sql = "UPDATE user set Lastdonated='".$_POST["dndate"]."' where Uname='".$_SESSION["Uname"]."'";
	
	
	if(mysqli_query($conn, $sql)){
		
		header('Location: Donnerpro.php');
		echo "Successfulls";
	}
	else
	{
		//header('Location: Donnerpro.php');
		echo "Error";
	
    }
}
else{
	
	//header('Location: DonnerRegister.php');
	echo "Error No data came";
}
?>