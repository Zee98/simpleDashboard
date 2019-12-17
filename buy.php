<?php
$love = 0; $car = 0; $toyota =0;
include("DB.php");
if(isset($_POST['love'])){
  $love = $_POST['love'];
  if($con){
    $q = mysqli_query($con, "INSERT INTO cart(prodect, price) VALUES('love', $love)");
    header("Location:product.php?message=1");
  } // end of con condition
}
if(isset($_POST['car'])){
  $car = $_POST['car'];
  $q = mysqli_query($con, "INSERT INTO cart(prodect, price) VALUES('car', $car)");
  header("Location:product.php?message=1");
}
if(isset($_POST['Toyota'])){
  $toyota = $_POST['Toyota'];
  $q = mysqli_query($con, "INSERT INTO cart(prodect, price) VALUES('Toyota', $toyota)");
  header("Location:product.php?message=1");
}
if(isset($_POST['car'])){
  $toyota = $_POST['car'];
  $q = mysqli_query($con, "INSERT INTO cart(prodect, price) VALUES('car', $toyota)");
  header("Location:product.php?message=1");
}
if(isset($_POST['motocycle'])){
  $toyota = $_POST['motocycle'];
  $q = mysqli_query($con, "INSERT INTO cart(prodect, price) VALUES('motocycle', $toyota)");
  header("Location:product.php?message=1");
}
if(isset($_POST['coffee'])){
  $toyota = $_POST['coffee'];
  $q = mysqli_query($con, "INSERT INTO cart(prodect, price) VALUES('coffee', $toyota)");
  header("Location:product.php?message=1");
}
if(isset($_POST['mouse'])){
  $toyota = $_POST['mouse'];
  $q = mysqli_query($con, "INSERT INTO cart(prodect, price) VALUES('mouse', $toyota)");
  header("Location:product.php?message=1");
}
if(isset($_POST['pepsi'])){
  $toyota = $_POST['pepsi'];
  $q = mysqli_query($con, "INSERT INTO cart(prodect, price) VALUES('pepsi', $toyota)");
  header("Location:product.php?message=1");
}
if(isset($_POST['beats'])){
  $toyota = $_POST['beats'];
  $q = mysqli_query($con, "INSERT INTO cart(prodect, price) VALUES('beats', $toyota)");
  header("Location:product.php?message=1");
}
if(isset($_POST['windows'])){
  $toyota = $_POST['windows'];
  $q = mysqli_query($con, "INSERT INTO cart(prodect, price) VALUES('windows', $toyota)");
  header("Location:product.php?message=1");
}
 ?>
