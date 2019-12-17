<?php
session_start();
if(isset($_SESSION['buying'])){
  include("header.php");
  ?>
        <h1 class="w3-center">Get to know our TEAM</h1>

        <div class="w3-row w3-margin">
          <div class="w3-card-24 w3-col s3 w3-khaki w3-round-large w3-margin w3-center">
            <img class="w3-round-large" src="img/user/profile.jpg" width="100%"  alt="zaman">
            <h3>Zaman Ehsani</h3>
            <h4>Developer</h4>
            <button type="button" class="w3-ripple w3-round w3-margin w3-padding w3-border-0 w3-green">Call</button>
            <button type="button" class="w3-ripple w3-round w3-margin w3-padding w3-border-0">Email</button>
          </div>

          <div class="w3-card-24 w3-col s3 w3-khaki w3-round-large w3-margin w3-center">
            <img class="w3-round-large" src="img/user/profile.jpg" width="100%"  alt="zaman">
            <h3>Zaman Ehsani</h3>
            <h4>Developer</h4>
            <button type="button" class="w3-ripple w3-round w3-margin w3-padding w3-border-0 w3-green">Call</button>
            <button type="button" class="w3-ripple w3-round w3-margin w3-padding w3-border-0">Email</button>
          </div>

          <div class="w3-card-24 w3-col s3 w3-khaki w3-round-large w3-margin w3-center">
            <img class="w3-round-large" src="img/user/profile_ 2.png" width="100%"  alt="zaman">
            <h3>Zaman Ehsani</h3>
            <h4>Developer</h4>
            <button type="button" class="w3-ripple w3-round w3-margin w3-padding w3-border-0 w3-green">Call</button>
            <button type="button" class=" w3-ripple w3-round w3-margin w3-padding w3-border-0">Email</button>
          </div>

          <div class="w3-card-24 w3-col s3 w3-khaki w3-round-large w3-margin w3-center" >
            <img class="w3-round-large" src="img/user/profile.jpg" width="100%"  alt="zaman">
            <h3>Zaman Ehsani</h3>
            <h4>Developer</h4>
            <button type="button" class="w3-ripple w3-round w3-margin w3-padding w3-border-0 w3-green">Call</button>
            <button type="button" class="w3-ripple w3-round w3-margin w3-padding w3-border-0">Email</button>
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
