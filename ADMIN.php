<?php
 
  $host = "localhost";
  $user = "root";
  $pass ="";
  $db = "staff2";
  $conn = mysqli_connect($host,$user,$pass,$db);
  if(!$conn)
  {
  	die("not successful").mysqli_error();
  }
  echo "<center><p>connection done successful<p><br><br></center>";
  if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
//check if the password is corect
$checkquery="SELECT * FROM admin where username='$username' AND password='$password'";
$results=mysqli_query($conn,$checkquery)or die(mysqli_error($conn));
while($row=mysqli_fetch_array($results))
{
	$theusername=$row['username'];
	$thepassword=$row['password'];
}
global $theusername,$thepassword;
if($username == $theusername && $password == $thepassword)
{
	echo"<script>
	alert
	('Log in successful, Welcome Admin');
	window.location.href='ADMIN.php';
	</script>";
	
	}
else
{
	echo "<script>
	alert('log in not successful');
	window.location.href='ADMIN.html'; 
	</script>";
}

}
mysqli_close($conn);
 ?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<style type="text/css">
	body{
		font-size: 45px;
	}
</style>
<body>
	<p>
		<center>
	<div>
		<ol>
			<li>
<a href="recived.php" id="a">recieved complains</a>
</li>

<p>
		<center>
	<div>
		
			<li>
<a href="username.php" id="a">their passwords</a>
</li>
</ol>
</p>
</center>
</div>

</body>
</html>