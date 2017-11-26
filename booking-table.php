<?php session_start(); ?>
<html>

<?php
require_once("connect.php");
 ?>

<head>
  <title> Booking Table</title>
  <link rel="stylesheet" href="main.css"/>
  <header>
    <?php
    require_once('menu.php');
    ?>
  </header>
  </head>

<body>
  <!-- <h1 style = "margin: 5% 0% 5% 10%">Product Table</h1> -->
<img style="margin: 2% 0% 5% 0%;" src="booking-table.png">

<center>
  <table class="usertable" style="border-collapse: collapse; width: 60%;">
    <tr style = "background-color:#f2f2f2;" >

      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Booking ID</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Customer Name</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Location</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Approved</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Car Name</th>

  </table>

<br>
<br>
      <a href="admin.php"><button class="button">BACK</button></a>


</center>

</body>
</html>
