<?php
session_start();
if(isset($_SESSION['buying'])){
  include("header.php");
  ?>

    <?php   if (isset($_GET['message'])) {   ?>
      <script type="text/javascript">
        alert("Added to the cart");
      </script>
      <?php } ?>

      <div class="w3-container w3-light-grey">
        <div class="w3-margin-left w3-padding-left">

          <form action="buy.php" method="post">
            <div class="w3-card-12 w3-quarter w3-margin">
              <img src="img/card1.jpg" class="w3-card-4" height="100%" width="100%" alt="Norway">
              <div class="w3-container">
                <h3 class="w3-center">Love</h3>
                <p>PRICE: <label class="w3-grey w3-margin w3-round w3-padding-small">$400</label>
                  <button type="submit" value="400" class="w3-ripple w3-right w3-round w3-padding-small w3-teal w3-border-0" name="love">Add to Cart</button>
                </p>
              </div>
            </div>
          </form>

          <form action="buy.php" method="post">
            <div class="w3-card-12 w3-quarter w3-margin">
              <img src="img/card2.jpg" class="w3-card-4" height="100%" width="100%" alt="Norway">
              <div class="w3-container">
                <h3 class="w3-center">Toyota Car</h3>
                <p>PRICE: <label class="w3-grey w3-margin w3-round w3-padding-small">$30000</label>
                  <button type="submit" value="30000" class="w3-ripple w3-right w3-round w3-padding-small w3-teal w3-border-0" name="Toyota">Add to Cart</button>
                </p>
              </div>
            </div>
          </form>

          <form action="buy.php" method="post">
            <div class="w3-card-12 w3-quarter w3-margin w3-margin-right">
              <img src="img/card3.jpg" class="w3-card-4" height="100%" width="100%" alt="Norway">
              <div class="w3-container">
                <h3 class="w3-center">car</h3>
                <p>PRICE: <label class="w3-grey w3-margin w3-round w3-padding-small">$200000</label>
                  <button type="submit" value="200000" class="w3-ripple w3-right w3-round w3-padding-small w3-teal w3-border-0" name="car">Add to Cart</button>
                </p>
              </div>
            </div>
          </form>

          <form action="buy.php" method="post">
            <div class="w3-card-12 w3-quarter w3-margin">
              <img src="img/card4.jpg" class="w3-card-4" height="100%" width="100%" alt="Norway">
              <div class="w3-container">
                <h3 class="w3-center">Motocycle</h3>
                <p>PRICE: <label class="w3-grey w3-margin w3-round w3-padding-small">$4000</label>
                  <button type="submit" value="40000" class="w3-ripple w3-right w3-round w3-padding-small w3-teal w3-border-0" name="motocycle">Add to Cart</button>
                </p>
              </div>
            </div>
          </form>

          <form action="buy.php" method="post">
            <div class="w3-card-12 w3-quarter w3-margin">
              <img src="img/card5.jpg" class="w3-card-4" height="100%" width="100%" alt="Norway">
              <div class="w3-container">
                <h3 class="w3-center">Coffee Cup</h3>
                <p>PRICE: <label class="w3-grey w3-margin w3-round w3-padding-small">$40</label>
                  <button type="submit" value="40" class="w3-ripple w3-right w3-round w3-padding-small w3-teal w3-border-0" name="coffee">Add to Cart</button>
                </p>
              </div>
            </div>
          </form>

          <form action="buy.php" method="post">
            <div class="w3-card-12 w3-quarter w3-margin">
              <img src="img/card6.jpg" class="w3-card-4" height="100%" width="100%" alt="Norway">
              <div class="w3-container">
                <h3 class="w3-center">MOUSE</h3>
                <p>PRICE: <label class="w3-grey w3-margin w3-round w3-padding-small">$70</label>
                  <button type="submit" value="70" class=" w3-ripple w3-right w3-round w3-padding-small w3-teal w3-border-0" name="mouse">Add to Cart</button>
                </p>
              </div>
            </div>
          </form>

          <form action="buy.php" method="post">
            <div class="w3-card-12 w3-quarter w3-margin">
              <img src="img/card7.jpg" class="w3-card-4" height="100%" width="100%" alt="Norway">
              <div class="w3-container">
                <h3 class="w3-center">PEPSI</h3>
                <p>PRICE: <label class="w3-grey w3-margin w3-round w3-padding-small">$10</label>
                  <button type="submit" value="10" class="w3-ripple w3-right w3-round w3-padding-small w3-teal w3-border-0" name="pepsi">Add to Cart</button>
                </p>
              </div>
            </div>
          </form>

          <form action="buy.php" method="post">
            <div class="w3-card-12 w3-quarter w3-margin">
              <img src="img/card8.jpg" class="w3-card-4" height="100%" width="100%" alt="Norway">
              <div class="w3-container">
                <h3 class="w3-center">Beats headset</h3>
                <p>PRICE: <label class="w3-grey w3-margin w3-round w3-padding-small">$100</label>
                  <button type="submit" value="100" class="w3-ripple w3-right w3-round w3-padding-small w3-teal w3-border-0" name="beats">Add to Cart</button>
                </p>
              </div>
            </div>
          </form>

          <form action="buy.php" method="post">
            <div class="w3-card-12 w3-quarter w3-margin">
              <img src="img/card9.jpg" class="w3-card-4" height="100%" width="100%" alt="Norway">
              <div class="w3-container">
                <h3 class="w3-center">windows 10</h3>
                <p>PRICE: <label class="w3-grey w3-margin w3-round w3-padding-small">$120</label>
                  <button type="submit" value="120" class="w3-ripple w3-right w3-round w3-padding-small w3-teal w3-border-0" name="windows">Add to Cart</button>
                </p>
              </div>
            </div>
          </form>

        </div>
      </div>
<?php
include("footer.php");
}else{
  header("Location:login.php?message= login is required");
}
?>
