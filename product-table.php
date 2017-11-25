<html>

<?php
require_once("connect.php");
 ?>

<head>
  <title> Product Table Table</title>
  <link rel="stylesheet" href="main.css"/>
  <header>
<!--MENU Bar-->
      <div class= "container">
        <nav class= "nav">
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="index.php">NEWS</a></li>
            <li><a href="index.php">MODELS</a></li>
            <li><a href="Booking.php">BOOKING</a></li>
            <li><a href="index.php">CONTACT US</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
              <li><a href="login.php">LOG OUT
              </a></li>

          </ul>
        </nav>
      </div>
    </header>
  </head>

<body>
  <!-- <h1 style = "margin: 5% 0% 5% 10%">Product Table</h1> -->
<img style="margin: 2% 0% 5% 0%;" src="produc table.png">

<center>
  <table class="usertable" style="border-collapse: collapse; width: 60%;">
    <tr style = "background-color:#f2f2f2;" >

      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Product ID</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Product Name</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Manufacturer</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Price</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Description</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Edit</th>

    </tr>
      <?php
      $q = "select * from product";
      $result = $mysqli->query($q);
      if ($result) {
          while($row = $result->fetch_array()){
            echo "<tr>";
            echo "<td>".$row['productID'] ."</td>";
            echo "<td>".$row['name'] ."</td>";
            echo "<td>".$row['manufacturer'] ."</td>";
            echo "<td>".$row['price'] ."</td>";
            echo "<td>".$row['description'] ."</td>";
            echo "<td><a href = 'editProduct.php?prod=".$row['productID']."'> Edit </a></td>";
            echo "</tr>";


          }
      }else{
        echo "FUCK";
      }


      ?>
  </table>

<br>
<br>
      <a href="admin.html"><button class="button">BACK</button></a>


</center>

</body>
</html>
