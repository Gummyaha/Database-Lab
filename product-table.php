<html>
<?php
require_once("connect.php");
 ?>
<head>
  <title>Product Table</title>
</head>

<body>
  <h1 style = "margin: 5% 0% 5% 10%">Product Table</h1>

<center>
  <table class="usertable" style="border-collapse: collapse; width: 60%;">
    <tr style = "background-color:#f2f2f2;" >
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Product ID</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Product Name</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Manufacturer</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Price</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Description</th>

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
            echo "</tr>";


          }
      }else{
        echo "FUCK";
      }


      ?>
  <table>

<br>
<br>
      <a href="admin.html"><button class="button" style= "padding: .5% 2% .5% 2%;">BACK</button></a>


</center>

</body>
</html>
