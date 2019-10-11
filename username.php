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
	
	<h1>usernames</h1>
	</center>
		<table border="1" align="center" >
				<tr>
				  <td>id</td>
				  <td>username</td>
				  <td>password</td>
				  
				  
				</tr>
			<?php
				$messagequery=mysqli_query($conn,"SELECT * FROM details")or die(mysqli_error($conn));
				while($row=mysqli_fetch_array($messagequery))
					{
						echo
						"<tr>
						<td>{$row['id']}</td>
						<td>{$row['Email']}</td>
						<td>{$row['password']}</td>
				

					
						</tr>\n";
					}
			?>
		</table>
	
	<a href="ADMIN.html">Back to admins Page</a>
	<br>
	<a href="ADMIN.php">Back</a>
	</body> 
</html>