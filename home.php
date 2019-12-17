<?php
session_start();
if(isset($_SESSION['buying'])){
  include("header.php");
  ?>
      <div id="back" class="w3-container w3-center w3-light-grey">
        <br><br><br>
        <p class="w3-center  w3-xlarge">welcome to Shopping Mall</p>
        <br>
        <h3>here you can shoppe your best items for free</h3>
        <br>
        <h4>to shopp, go to the product tab.</h4>
        <h4> to read about our team, goto the about us tab</h4>
        <h4> to contact us about any regards, goto the contact as tab</h4>
        <h4> to see what you have selected for shopping, click on the cart tab</h4>
        <br><br>
      </div>
      <div class="w3-container w3-light-grey ">
        <hr> <hr>

      </div>
    </body>
    </html>

<?php
include("footer.php");
}else{
  header("Location:login.php?message= login is required");
}
?>
