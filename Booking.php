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
    <img class="banner" src="Banner-Car3.png">
    <img class="ChooseBrand" style="float: right; width:90%"; src="Head-Choose-Brand.png">

    <center>
      <table>
        <tr>
          <td class="car-logo">
            <img class="LogoBrand" src="maseratil.png">
          </td>
          <td class="car-logo">
            <img class="LogoBrand" src="benz.png">
          </td>
          <td class="car-logo">
            <img class="LogoBrand" src="bugati.png">
          </td>
          <td class="car-logo">
            <img class="LogoBrand" src="ferrari.png">
          </td>
        </tr>
      </table>
    </center>

    <button class="button">NEXT STEP</button>

  </body>
</html>
