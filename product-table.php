<?php session_start();
if(isset($_SESSION['role'])){
  if($_SESSION['role'] == 0){
    header('Location: user.php');
  }
}else{
  header('Location: login.php');
}?>
<html>

<?php
require_once("connect.php");
 ?>

<head>
  <title> Product Table </title>
  <link rel="stylesheet" href="main.css"/>
  <header>
<?php require_once('menu.php'); ?>
    </header>
  </head>

<body>
  <!-- <h1 style = "margin: 5% 0% 5% 10%">Product Table</h1> -->
<img style="margin: 2% 0% 5% 0%;" src="produc table.png">

<center>
  <table class="usertable user-table" style="border-collapse: collapse; width: 90%;">
    <tr style = "background-color:#f2f2f2;" >

      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Product ID</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Product Name</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Manufacturer</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Price</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Description</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Status</th>
      <?php if($_SESSION['role'] == 2){
      echo '<th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Edit</th>';
    }?>
    </tr>
      <?php
      $q = "SELECT productID, product.name AS name, brandName as manufacturer, price, description, disabled FROM product, brands where brands.brandID = product.manufacturer";
      $result = $mysqli->query($q);
      if ($result) {
          while($row = $result->fetch_array()){
            echo "<tr>";
            echo "<td>".$row['productID'] ."</td>";
            echo "<td>".$row['name'] ."</td>";
            echo "<td>".$row['manufacturer'] ."</td>";
            echo "<td>".$row['price'] ."</td>";
            echo "<td>".$row['description'] ."</td>";
            echo "<td>";
            if($row['disabled'] == 0){
              echo "Enabled";
            }else{
              echo "Disabled";
            }
            if($_SESSION['role'] == 2){
            echo "</td>";
            echo "<td><a href = 'editProduct.php?prod=".$row['productID']."'><button class = 'button' style= 'font-size:15; padding:5;'> Edit </button></a></td>";
            echo "</tr>";
          }

          }
      }else{
        echo "Something went wrong";
      }


      ?>
  </table>

<br>
<br>

      <a href="admin.php"><button class="button" style= "padding: .5% 2% .5% 2%;">BACK</button></a>



</center>

</body>
</html>
