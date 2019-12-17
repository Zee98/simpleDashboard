<?php
if(isset($_POST['first_name'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['emaial'];
  $phone = $_POST['phone'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  include("DB.php");
  if($con){
    $query = mysqli_query($con, "insert into user(first_name,last_name,email,phone,username,password) values('$first_name', '$last_name','$email','$phone','$username','$password')");
    header("Location:register.php?message=success");
  }
  else{
    header("Location:register.php?message= unable to connect");
  }

} // end of isset
else{
  header("Location:register.php?message= unable to register");
}
 ?>
