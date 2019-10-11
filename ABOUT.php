<?php 
$host = "localhost";
$user = "root";
$pass ="";
$db = "staff2";
$conn = mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
	die("could connect to database").mysqli_error();
}
echo "able to be connected may proceed";
if(isset($_POST['submit']))
{
	$fn=$_POST['Fname'];
$sn=$_POST['Sname'];
$tel=$_POST['Tel_No'];
$comp=$_POST['complain'];

//insert data
$insertquery="INSERT INTO issues (Fname,Sname,Tel_No,complain)VALUES('$fn','$sn','$tel','$comp')";
$results=mysqli_query($conn,$insertquery)or die(mysqli_error($conn));
if($results)
{
	echo"
	<script>
	alert('Data inserted successfully');
	window.location.href='ABOUT_STAFF.php';
	</script>
	";
}
else
{
	echo"
	<script>
	alert('Failed to insert Data, try again');
	window.location.href='ABOUT_STAFF.php';
	</script>
	";
}
}
mysqli_close($conn);
 ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<a href="#">received messages</a>
<a href="#"></a>
</body>
</html>