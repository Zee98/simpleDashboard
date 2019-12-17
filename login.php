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
    <form method="post" action="loggin.php" id="panal" class="w3-container w3-card-4 w3-light-grey w3-round-large">
      <?php
        if(isset($_GET['message'])){?>
       <div class="w3-panel w3-red s3-round-large">
         <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>
         <p><?php echo $_GET['message']; ?></p>
       </div>

     <?php } ?>
      <h2>Login to the System</h2>
      <p>
      <label>User Name</label>
      <input class="w3-input w3-border w3-round" required name="username" type="text"></p>

      <p>
      <label>Password</label>
      <input class="w3-input w3-border w3-round" required name="password" type="password"></p>

      <p class="w3-text-teal"> Forgot your password? no worries. recovery it <a href="reset.php"> here</a> </p>
      <button type="submit" class="w3-btn w3-teal w3-round-large">Login</button>
      <br><br>
      <p>no account yet? create <a href="register.php">here</a> </p>
    </form>
  </div>
  </body>

  </html>
