<?php
session_start();
if(isset($_SESSION['buying'])){
  session_destroy();
  include("DB.php");
  if ($con) {
    $q = mysqli_query($con, "delete from cart");

  }
  header("Location:login.php?message=logged out");
}else {
header("Location:login.php?message= the login is required ");
}
 ?>
