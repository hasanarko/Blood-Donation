<?php

session_start();
	
	$conn = mysqli_connect("localhost", "root", "", "blood");
	if (!$conn) 
	{
		die("Connection failed: " . mysqli_connect_error());
	}

     $UnameErr = $passErr = "";
      $Uname = $pass = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["Uname"])) {
		$UnameErr = "Name is required";
		} else {
		$Uname = test_input($_POST["Uname"]);
		}

		if (empty($_POST["pass"])) {
		$passErr = "password is required";
		} 
		else {
		$pass = test_input($_POST["pass"]);
		}
		
		if($UnameErr == "" OR $passErr == "")
		{
			 $sql = "SELECT * FROM login WHERE Uname ='$Uname' AND password='$pass' " ;
			$result = mysqli_query($conn,$sql);

			if(mysqli_num_rows ($result) > 0)
            { 
				$_SESSION["Uname"]=$_POST["Uname"];
				header('location: userpro.php');
			}
			else
			{
				echo"unscccessful login";
			}
			
		}
}

function test_input($data) {
	$data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
	
?>