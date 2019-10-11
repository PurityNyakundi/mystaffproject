<<?php 
$host = "localhost";
$user = "root";
$pass ="";
$db = "staff2";
$conn = mysqli_connect($host,$user,$pass,$db);
?>
<!DOCTYPE html>
<html>
<head>
<title>My Messages</title>

</head>
<style type="text/css">
	table {
    width: 100%;
}

th {
    height: 50px;
} 
body
{
	font-size: 34px;
	
}
</style>
	<body>
		<center>
	
	<h1>Recieved Messages</h1>
	</center>
		<table border="1" align="center" >
				<tr>
				  <td>First</td>
				  <td>Last</td>
				  <td>Phone</td>
				  <td>complain</td>
				  
				</tr>
			<?php
				$messagequery=mysqli_query($conn,"SELECT * FROM issues")or die(mysqli_error($conn));
				while($row=mysqli_fetch_array($messagequery))
					{
						echo
						"<tr>
						<td>{$row['Fname']}</td>
						<td>{$row['Sname']}</td>
						<td>{$row['Tel_No']}</td>
						<td>{$row['complain']}</td>

					
						</tr>\n";
					}
			?>
		</table>
	
	<a href="ADMIN.html">Back to admins Page</a><br>
	<a href="ADMIN.php">Back</a>
	


	</body>
</html>