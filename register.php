<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="w3.css">
    </head>
  <body>
<div class="w3-quarter w3-text-white">
  <p>.</p>
</div>
<div class="w3-half">
    <form method="post" action="add.php" id="panal" class="w3-container w3-card-4 w3-light-grey w3-round-large">
      <?php
        if(isset($_GET['message'])){?>
       <div class="w3-panel <?php if($_GET['message'] == "success"){ echo "w3-green";}else{ echo "w3-red";}?> s3-round-large">
         <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>
         <p><?php echo $_GET['message']; ?></p>
       </div>

     <?php } ?>

      <h2>Register An Account</h2>
      <p>
      <label>First Name</label>
      <input class="w3-input w3-border w3-round" name="first_name" type="text"></p>

      <p>
      <label>Last Name</label>
      <input class="w3-input w3-border w3-round" name="last_name" type="text"></p>

      <p>
      <label>Email</label>
      <input class="w3-input w3-border w3-round" name="email" type="text"></p>

      <p>
      <label>Phone</label>
      <input class="w3-input w3-border w3-round" name="phone" type="text"></p>

      <p>
      <label>username</label>
      <input class="w3-input w3-border w3-round" name="username" type="text"></p>

      <p>
      <label>Password</label>
      <input class="w3-input w3-border w3-round" name="password" type="password"></p>

      <button type="submit" class="w3-btn w3-white w3-border w3-border-blue w3-round-large">Sign up</button>
     <a href="login.php">back to login</a>
      <br><br>

    </form>
</div>


  </body>

  </html>
