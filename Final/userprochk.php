<html>
<?php
session_start();
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
	<title>User profile</title>
</head>

<body background="bld.jpg" align="center">

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
		echo "<td><font style='background-color:blue>;'>Contact no: </font></td><td>".$res['Mobile']."</td>";
		echo "</tr><tr>";
		echo "<td>FullName:</td><td>".$res['Name']."</td>";
		echo "</tr><tr>";
		echo "<td>Gender:</td><td>".$res['Gender']."</td>";
		echo "</tr><tr>";
		echo "<td>District:</td><td>".$res['District']."</td>";
		echo "</tr><tr>";
		echo "</tr>";
		//</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><span class='glyphicon glyphicon-remove-circle'></span></a></td>";
    }
	echo "</table>";
  ?>
</html>