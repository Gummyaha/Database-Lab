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
  <title> User Table</title>
  <link rel="stylesheet" href="main.css"/>
  <header>
<!--MENU Bar-->
<?php
require_once('menu.php');
?>
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
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Status</th>
      <?php if($_SESSION['role'] == 2){
      echo '<th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Edit</th>';
    }?>
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
            echo "<td>";
            if($row['disabled'] == 0){
              echo "Enabled";
            }else{
              echo "Disabled";
            }
            if($_SESSION['role'] == 2){
            echo "</td>";
            echo "<td><a href = 'editUser.php?user=".$row['customerID']."'><button class = 'button' style= 'font-size:15; padding:5;'> Edit </button></a></td>";
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
