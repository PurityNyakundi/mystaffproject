<?php
	include('config.php');
	?>
<!DOCTYPE html>
<html>
<head>
<title>My Messages</title>
<link rel="stylesheet" href="st.css">
</head>
	<body>
	
	<h1>Recieved Messages</h1>
		<table border="1" align="center" class="w3-table w3-striped w3-bordered"> 
				<tr>
				  <td>First</td>
				  <td>Last</td>
				  <td>Phone</td>
				  <td>complain</td>
				</tr>
			<?php
				$messagequery=mysqli_query($conn,"SELECT * FROM details")or die(mysqli_error($conn));
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
	
	<a href="adminspage.html">Back to admins Page</a>
	</body>
</html>