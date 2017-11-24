<?php
  session_start();
 ?>
<html>

<link rel="stylesheet" href="user.css"/>
  <head>
    <title> THE CAR </title>
  </head>

  <header>
<!--MENU Bar-->
      <div class= "container">
        <nav class= "nav">
          <ul>
              <li><a href="#home">HOME</a></li>
              <li><a href="#news">NEWS</a></li>
              <li><a href="Model.php">MODELS</a></li>
              <li><a href="Booking.php">BOOKING</a></li>
              <li><a href="#contact">CONTACT US</a></li>
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
      <img class="head" style="margin: 5% -5% 5% 0%;" src="User-Head.png"><br>

      <center>
      <h1 style="margin: 5% 0% 0% 0%;"> Name  Surname </h1>
      </center>

      <img src="your booking.png"><br>

      <table>
        <tr>
          <th>Brand</th>
          <th>Model</th>
          <th>Location</th>
          <th>Date</th>
        </tr>
        <tr>
          <td>XXX</td>
          <td>XXXXX</td>
          <td>XXXX</td>
          <td>DD-MM-YY</td>
        </tr>

      </table>

    </body>
</html>
