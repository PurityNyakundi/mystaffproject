<?php
if (isset($_POST['login'])) {
  $host = "localhost";
  $user = "root";
  $pass ="";
  $db = "staff2";
  $conn = mysqli_connect($host,$user,$pass,$db);
  if(!$conn)
  {
    die("could not connect").mysqli_error();
  }

      $em = $_POST['Email'];
      $pas = $_POST['password'];
      $sql = "INSERT INTO details(Email,password) VALUES('$em','$pas')";
      $retrieve = mysqli_query($conn,$sql);
      if($retrieve)
      {
        echo"<center><b><p>Welcome user</p></b></center>";
      }
      else
      {
        echo"<script>
        alert('your details not been entered successfully');
        window.location.href = 'index1.php';
        <script>  ";
      }

      mysqli_close($conn);
    }
    ?>