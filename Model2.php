<?php
session_start();
require_once('connect.php');
if(isset($_POST['select'])){
  $q = 'SELECT productID, name FROM product where manufacturer = (SELECT brandID from brands where brandID = '.$_POST['select'].')';
  //echo $q;
}else{
  header('Location:Model1.php');
}
?>
<html>
<link rel="stylesheet" href="Booking.css"/>
<head>
  <title> Models</title>
</head>

<header>
  <!--MENU Bar-->
  <?php
  require_once('menu.php');
  ?>
</header>


<body>
  <img class="banner" src="Model1-head.png"><br>
  <img class="ChooseBrand" style="float: right; width:70%; margin-bottom: 2%;" src="Head-Choose-Model.png">
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
  <form action="Model.php" method="post">
    <?php
    $results = $mysqli -> query($q);
    while($row = $results->fetch_array()){
      echo '<br>';
      echo '<center>';
      echo '<a href="Model.php"> Model XXX</a>';
      echo '<br>';
      echo '</center>';

    }
    ?>

    <br>


    <a href="Model1.php"><button class="button"> < Back</button></a>

  </form>

</body>
</html>
