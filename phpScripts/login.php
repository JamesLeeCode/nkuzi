<?php
session_start();
 include 'db_connection.php';

 //Open DB Connection
 $conn = OpenCon();

  $user = mysqli_real_escape_string( $conn, $_POST['email']);
  $password = mysqli_real_escape_string( $conn, $_POST['password']);


 $query = "SELECT * FROM adminusers WHERE email	= '".$user ."' AND password = '".$password."'  ";
 $result = mysqli_query( $conn,  $query);

 $_SESSION["email"] =   $_POST['email'];
 $user = $_POST['email'];
 //CLose DB Connection
  CloseCon($conn);
if(mysqli_num_rows( $result)==1)
{
  header("Location:../adminDashboard.php");
  exit();
}
else {
  header("Location:../index.php?status=error");
  exit();
}





 ?>
