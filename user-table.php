<html>
<?php
require_once("connect.php");


 ?>
<head>
  <title> User Table</title>
</head>

<body>
  <h1 style = "margin: 5% 0% 5% 10%"> User Table </h1>

<center>
  <table class="usertable" style="border-collapse: collapse; width: 60%;">
    <tr style = "background-color:#f2f2f2;" >
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">User ID</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">First Name</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Last Name</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Username</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Email</th>
    </tr>
      <?php
      $q = "select * from customer";
      $result = $mysqli->query($q);
      if ($result) {
          while($row = $result->fetch_array()){
            echo "<tr>";
            echo "<td>".$row['customerID'] ."</td>";
            echo "<td>".$row['fName'] ."</td>";
            echo "<td>".$row['lName'] ."</td>";
            echo "<td>".$row['username'] ."</td>";
            echo "<td>".$row['email'] ."</td>";
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
