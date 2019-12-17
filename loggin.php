<?php
session_start();
if(isset($_POST['username'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  include("DB.php");
  if($con){
    $result = mysqli_query($con,"select * from user where username = '$username' and password = '$password'");
    $count = mysqli_num_rows($result);
    if($count == 1){
      $_SESSION['buying'] = $username;
      header("Location:home.php");
    }else{
      header("Location:login.php?message= unable to log in! please try again");
    }

  } // end of con if

   else{
     header("Location:login.php?message= unable to connect to database");
   }
}
 ?>
