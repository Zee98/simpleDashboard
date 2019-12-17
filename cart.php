<?php
session_start();
if(isset($_SESSION['buying'])){
  include("header.php");
  ?>
      <div class="w3-container w3-center">
        <br><br><br>
          <h1 class="w3-text-teal">Here are all the items you have selected to buy</h1>
          <span class=""><br></span>
          <div class="w3-col s3">
            <p class="w3-text-white"></p>
          </div>
          <table class="w3-table w3-striped w3-border w3-center w3-half">
            <tr class="w3-teal">
              <th>Number</th>
              <th>Products</th>
              <th>Price</th>
              <th>Date</th>
            </tr>
            <?php
            $total = 0;
            $i = 1;
            include("DB.php");
            if($con){
              $q = mysqli_query($con, "select * from cart where EXTRACT(DAY from date) >= DAY(CURRENT_DATE)");
              while ($row = mysqli_fetch_row($q)) {
                echo "<tr>";
                echo "<td>". $i."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>"." $".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "</tr>";
                $i++;
                $total +=$row[2];
              }
          }?>
          <tr class="w3-green">
            <td colspan="3" class="w3-center">Total</td>
            <td><?php echo "$".$total; ?></td>
          </tr>
          </table>

          <div class="sw-container">
            <div class="w3-col">
              <p class="w3-text-teal"><?php echo "Total: $".$total; ?></p>
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
