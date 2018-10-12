<html>
	<body background="bld.jpg">
		<style>
			a:link, a:visited 
			{
				background-color: #f44336;
				color: white;
				padding: 14px 25px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
			}


			a:hover, a:active 
			{
				background-color: red;
			}
	
		</style>

	<a href ="userpro.php">Back</a>
		<table border="2px" align="center">
			<tr>
			<td>Name</td>
			<td>Full Name</td>
			<td>Mobile</td>
			<td>Email</td>
			<td>District</td>
			<td>Gender</td>
			</tr>
			<?php
				session_start();
				$conn = mysqli_connect("localhost", "root", "", "blood");
				if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
				}
				$sql = "Select * from user where Blood='B+' and Available=0";
				$result = mysqli_query ($conn,$sql);
				while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>".$res['Uname']."</td>";
				echo "<td>".$res['Name']."</td>";
				echo "<td>".$res['Mobile']."</td>";
				echo "<td>".$res['Email']."</td>";
				echo "<td>".$res['District']."</td>";
				echo "<td>".$res['Gender']."</td>";
				echo "</tr>";
			}
			?>
		</table>
	</body>
</html>