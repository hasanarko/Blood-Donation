<?php
		session_start();
			ob_start();

				if ((isset($_SESSION['Uname'])))
				{
						header("location: show.php");
				}
				else 
				{
						require_once("config.php");
					//connect to db here
					//fetching data in descending order (lastest entry first)
    
						$limit = 25;  
						if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
						$start_from = ($page-1) * $limit;  
						$sql = "SELECT * FROM user"; 
						$rs_result = mysqli_query ($conn,$sql);
				}
	?>




<html>
	<head>
		<title>Admin</title>
	</head>

<body>
<br>
<style>
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
h1{
	 background-color: #f44336;
     color: white;
     padding: 14px 25px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
	 background-color: blue;
}

</style>
<table align="right">
<tr>
<td><a href ="logout.php">Back</a></td>
</tr>
<table>
<table align="left">
<tr>
<td><a href ="del.php">Delete</a></td>
</tr>
    <table align="center">
		<tr>
			<td>
				<h1>Registers of Users & Donners </h1>
			</td>

	</table>
<br>
<form method="post" action="search.php">
<input type="text" name="search" placeholder="District">
<input type="submit" value="Search">
</form>
<br>
<table border="1px" width="10%">

    <tr>
        <th>User Name</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Contact No</th>
        <th>Gender</th>
        <th>District</th>
        <th>Blood Group</th>
		<th>Date of Birth</th>
		<th>Agree</th>
		<th>Lastdonated</th>
		<th>Available</th>
    </tr>
    <?php
			$result = mysqli_query ($conn,$sql);
			while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)) 
			{
				echo "<tr>";
				echo "<td>".$res['Uname']."</td>";
				echo "<td>".$res['Name']."</td>";
				echo "<td>".$res['Email']."</td>";
				echo "<td>".$res['Mobile']."</td>";
				echo "<td>".$res['Gender']."</td>";
				echo "<td>".$res['District']."</td>";
				echo "<td>".$res['Blood']."</td>";
				echo "<td>".$res['Birthdate']."</td>";
				echo "<td>".$res['Answer']."</td>";
				echo "<td>".$res['Lastdonated']."</td>";
				echo "<td>".$res['Available']."</td>";
				
				echo "</tr>";
			}
    ?>
    
</table>

</body>
</html>