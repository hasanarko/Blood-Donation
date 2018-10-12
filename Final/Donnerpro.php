<html>

		<body background="bld.jpg" align="center">
			<style>
			a:link, a:visited 
			{
				background-color: #f44336;
				color: white;
				padding: 14px 25px;
				text-align: right;
				text-decoration: none;
				display: inline-block;
			}


			a:hover, a:active 
			{
				background-color: red;
			}
	
		</style>
				<table align="right">
					<tr>
						<td><a href ="logout.php">LogOut</a></td>
					</tr>
				</table><br>

<?php
session_start();
	if(isset($_SESSION["Uname"]))
	{
		header("Location: index.php");
	}
$conn = mysqli_connect("localhost", "root", "", "blood");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

	$sql = "Select*from user where Uname='".$_SESSION["Uname"]."'";
	echo "<table align='center' border='1px' >";
	$result = mysqli_query ($conn,$sql);
	while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<td><font style='background-color:yellow;'>Hello!</font><font style='background-color:red;'> ".$res['Uname']."<font></td>";
		echo "<tr>";
	}
	echo "</table>";
?><br><br>
<head>
	<title>Donner profile</title>
</head>

		<form action="Donnerprocheck.php" method="post">
			<table  align="left" border ="1px">
				<tr>	  
					<th>
						<h1>Donner Profile</h1>
					</th>
				</tr>
					<tr>
						<td><font style="background-color:white;">Donated Date</font></td>
					</tr>
					<tr>
						<td><input type="date" name="dndate"></td>
					</tr>
					<tr>
						<td><input type="submit" value="Done" name="submit"></td>
					</tr>
		    </table>
			<br>  
				
   
		</form>
	<style>

			div.gallery 
			{
				margin: 5px;
				border: 1px solid #ccc;
				float: left;
				width: 180px;
			}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
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
<table align="center">
<tr>
<td><a href ="apbld.php">A+</a></td>
<td><a href ="bpbld.php">B+</a></td>
<td><a href ="abpbld.php">AB+</a></td>
<td><a href ="opbld.php">O+</a></td>
<td><a href ="anbld.php">A-</a><td>
<td><a href ="bnbld.php">B-</a></td>
<td><a href ="abnbld.php">AB-</a></td>
<td><a href ="onbld.php">O-</a></td>
</tr>
</table>
</body><br><br>
</body>
<?php
	$sql = "Select*from user where Uname='".$_SESSION["Uname"]."'";
	echo "<table align='center' border='2px' width='30%'>";
	$result = mysqli_query ($conn,$sql);
	while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<td><font style='background-color:blue;'>Name: </font></td><td>".$res['Uname']."</td>";
		echo "</tr><tr>";
		echo "<td><font style='background-color:blue;'>Email: </font></td><td>".$res['Email']."</td>";
		echo "</tr><tr>";
		echo "<td><font style='background-color:blue;'>Contact no: </font></td><td>".$res['Mobile']."</td>";
		echo "</tr><tr>";
		echo "<td><font style='background-color:blue;'>Full Name: </font></td><td>".$res['Name']."</td>";
		echo "</tr><tr>";
		echo "<td><font style='background-color:blue;'>Gender: </font></td><td>".$res['Gender']."</td>";
		echo "</tr><tr>";
		echo "<td><font style='background-color:blue;'>District: </font></td><td>".$res['District']."</td>";
		echo "</tr><tr>";
		echo "<td><font style='background-color:blue;'>Blood Group: </font></td><td>".$res['Blood']."</td>";
		echo "</tr><tr>";
		echo "<td><font style='background-color:blue;'>Date of Birth: </font></td><td>".$res['Birthdate']."</td>";
		echo "</tr><tr>";
		echo "<td><font style='background-color:blue;'>Available: </font></td><td>".$res['Available']."</td>";
		echo "</tr><tr>";
		echo "<td><font style='background-color:blue;'>Donated Last Time: </font></td><td>".$res['Lastdonated']."</td>";
		echo "</tr><tr>";
		echo "<td><font style='background-color:blue;'>Agree: </font></td><td>".$res['Answer']."</td>";
		echo "</tr>";
		//</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><span class='glyphicon glyphicon-remove-circle'></span></a></td>";
    }
	echo "</table>";
  ?>
</html>