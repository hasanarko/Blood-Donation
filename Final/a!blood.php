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

	<a href ="index.php">Back</a>
		<table border="2px" align="center">
		 
			<tr><td>Name</td><td>District</td></tr>
			<?php
				session_start();
				$conn = mysqli_connect("localhost", "root", "", "blood");
				if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
				}
				$sql = "Select * from user where Blood='A-' and Available=0";
				$result = mysqli_query ($conn,$sql);
				while($res=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
				echo "<tr>";
				echo "<td>".$res['Uname']."</td>";
				//echo "</tr><tr>";
				echo "<td>".$res['District']."</td>";
				echo "</tr>";
			}
			?>
		</table><br><br>
			<style>
.btn 
{
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

</style>
<table align="center">
<tr>
<td><button class="btn info" onclick="myFunction()">More Information</button></td>
</tr>
<th><p id="demo"></p></th>
<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "Please Login first then you'll get more information";
}
</script>
</table>
	</body>
</html>