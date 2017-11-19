<?php
  session_start();
 ?>
<html>
<link rel="stylesheet" href="Booking.css"/>
  <head>
    <title> THE CAR : Booking</title>
  </head>

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
              <li><a href="login.php">
                <?php if(isset($_SESSION["user"])){
                  echo "LOG OUT";
                }else{
                  echo "LOG IN";
                }
                ?>
              </a></li>
              </ul>
        </nav>
      </div>
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

      <br>
      <label class="radio-container" style="margin-left: 45%;">
        <input type="radio" checked="radio" name="radio">One
        <span class="checkmark"></span>
      </label>
      <br>
      <label class="radio-container" style="margin-left: 45%;">
        <input type="radio" name="radio">Two
        <span class="checkmark"></span>
      </label>
      <br>
      <label class="radio-container" style="margin-left: 45%;">
        <input type="radio" name="radio">Three
        <span class="checkmark"></span>
      </label>
      <br>

    <br>
    <br>
    <br>
    <br>

    <a href="Booking3.php"><button class="button">Next > </button></a>
    <a href="Booking.php"><button class="button"> < Back</button></a>


  </body>
</html>
