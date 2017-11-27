<?php session_start(); ?>
<html>

<?php
require_once("connect.php");


 ?>

<head>
  <title> Staff Table</title>
  <link rel="stylesheet" href="main.css"/>
  <header>
<!--MENU Bar-->
<?php
require_once('menu.php');
?>
    </header>
    <center>
      <!-- <label style = "font-size: 30;">ADD PRODUCT<label> -->
      <img style="margin-top: 2%;" src="stafftable.png">
</head>

<body>
  <img style="margin-top:3%;" scr="usetable.png">

<center>
  <table class="usertable" style="border-collapse: collapse; width: 60%;">
    <tr style = "background-color:#f2f2f2;" >

      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 18px;">Staff ID</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 18px;">Branch ID</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 18px;">First Name</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 18px;">Last Name</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 18px;">Username</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 18px;">Email</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1p solid #ddd; font-size: 18px;">Type</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1p solid #ddd; font-size: 18px;">Status</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1p solid #ddd; font-size: 18px;">Edit</th>

    </tr>
      <?php

      $q = "select * from staff";
      $result = $mysqli->query($q);
      if ($result) {
          while($row = $result->fetch_array()){
            echo "<tr>";
            echo "<td>".$row['staffID'] ."</td>";
            echo "<td>".$row['branchID'] ."</td>";
            echo "<td>".$row['fName'] ."</td>";
            echo "<td>".$row['lName'] ."</td>";
            echo "<td>".$row['username'] ."</td>";
            echo "<td>".$row['email'] ."</td>";
            echo "<td>".$row['type'] ."</td>";
            echo "<td>";
            if($row['disabled'] == 0){
              echo "Enabled";
            }else{
              echo "Disabled";
            }
            echo "</td>";
            echo "<td><a href = 'editStaff.php?user=".$row['staffID']."'> Edit </a></td>";
            echo "</tr>";

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
