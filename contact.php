<?php
session_start();
if(isset($_SESSION['buying'])){
  include("header.php");
  ?>

  <h3 class="w3-center w3-margin">If you have any inquiries,</h3>
    <h3 class="w3-center">Feel free to contact us</h3>
  <div class="container">
    <div class="row" style="padding-top:20px;">
      <div class="col-2">
      </div>
    </div>

    <div class="row" >
      <div style="height:400px;" class="col-lg-5 col-sm-12">
        <h2 class="" >Contact Info</h2> <hr>
        <h4 class="fa fa-home" > &nbsp &nbsp &nbsp Barchi, Kabul Afghanistan</h4> <hr>
        <h4 class="fa fa-phone" >&nbsp &nbsp &nbsp +93787090486 | +93781702779</h4> <hr>
        <h4 class="fa fa-envelope" >&nbsp &nbsp &nbsp zamanehsani@ <span>gmail.com</span> </h4>

      </div>
      <div class="col-lg-7 col-sm-12">
        <form class="" action="contact.html" method="post">
            <h3 align="center">Send me a message</h3>
            <div class="row">
              <div class="col-lg-6">
                <input class="form-control" type="text" name="name" value="" placeholder="your full name" required><br>
              </div>
              <div class="col-lg-6">
                <input class="form-control" type="email" name="email" value=""  placeholder="your email" required> <br>
              </div>
            </div>
            <textarea class="form-control" required name="message" rows="8" cols="80" placeholder="enter your message here "></textarea> <br>
            <input type="submit" name="send" class="btn btn-primary" value="Send">
        </form>
      </div>
    </div>
  </div>

    </body>
    </html>

<?php
include("footer.php");
}else{
  header("Location:login.php?message= login is required");
}
?>
