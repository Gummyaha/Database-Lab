<html>

<?php
require_once("connect.php");


 ?>

<head>
  <title> User Table</title>
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
    <center>
      <!-- <label style = "font-size: 30;">ADD PRODUCT<label> -->
      <img style="margin-top: 2%;" src="usetable.png">
</head>

<body>
  <img style="margin-top:3%;" scr="usetable.png">

<center>
  <table class="usertable" style="border-collapse: collapse; width: 60%;">
    <tr style = "background-color:#f2f2f2;" >

      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 18px;">User ID</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 18px;">First Name</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 18px;">Last Name</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 18px;">Username</th>

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
            echo "<td><a href = 'editUser.php?user=".$row['customerID']."'> Edit </a></td>";
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
