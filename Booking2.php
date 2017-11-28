<?php session_start();
require_once('connect.php');
if(isset($_POST['select'])){
  $q = 'SELECT productID, name FROM product where manufacturer = (SELECT brandID from brands where brandID = '.$_POST['select'].')';
  //echo $q;
}else{
  header('Location:Booking.php');
}
?>
<html>
<link rel="stylesheet" href="Booking.css"/>
<head>
  <title> THE CAR : Booking</title>
</head>

<header>
  <!--MENU Bar-->
  <?php
  require_once('menu.php');
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
  <form action="Booking3.php" method="post">
    <?php
    $results = $mysqli -> query($q);
    while($row = $results->fetch_array()){
      echo '<br>';
      echo '<label class="radio-container" style="margin-left: 45%;">';
      echo '<input type="radio" checked="radio" name="model" value = '.$row["productID"].'>';
      echo $row['name'];
      echo '<span class="checkmark"></span>';
      echo '</label>';

    }
    ?>

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
