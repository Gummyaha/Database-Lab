<?php session_start(); ?>
<html>
<link rel="stylesheet" href="Booking.css"/>
<head>
  <title> THE CAR : Booking</title>
</head>

<header>
  <!--MENU Bar-->
  <?php
  require_once('menu.php');
  if(isset($_POST['model'])){
    $q = 'SELECT productID, name FROM product where manufacturer = (SELECT brandID from brands where brandID = '.$_POST['model'].')';
    //echo $q;
  }else{
    header('Location:Booking2.php');
  }
  ?>
</header>


<body>
  <img class="banner" src="Banner-Car3.png"><br>
  <img class="ChooseBrand" style="float: right; width:90%"; src="Head-Choose-Model.png">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <form action="Booking4.php" method="post">
<center>
<table>
  <tr>
    <td style="border-right-style:solid; border-color:white ;">
      <?php
      echo '<input type="hidden"  name="model" value = '.$_POST['model'].'>';
      $q = 'SELECT * FROM branch';
      $results = $mysqli -> query($q);
      while($row = $results->fetch_array()){
        echo '<br>';
        echo '<label class="radio-container" style="margin-left: 45%;">';
        echo '<input type="radio" checked="radio" name="branch" value = '.$row["branchID"].'>';
        echo $row['name'];
        echo '<span class="checkmark"></span>';
        echo '</label>';
      }
      ?>
    </td>
  </tr>
  <tr>
    <td>
      <h3> Select date: </h3> <input type="date" name="date" class="date-pick">
    </td>
  </tr>
</table>
</center>
    <br>

    <br>
    <br>
    <br>
    <br>

    <!-- <a href="Booking3.php"><button class="button"> </button></a> -->
    <input type="submit" class = "button" value  = "Next >">
    <a href="Booking.php"><button class="button"> < Back</button></a>

  </form>

</body>
</html>
