<?php
  session_start();
  require_once('connect.php');
 ?>

<html>

<link rel="stylesheet" href="Model2.css"/>

  <head>
    <title> THE CAR : Models </title>
  </head>

  <header>
    <?php
    require_once('menu.php');
    ?>
  </header>

  <body>
    <div class="Name-Head" style="margin: 10% 15% 5% 10%;">
      <h1> The XXX </h1>
    </div>

<br>

<h3 style="margin: 0% 5% 1% 10%" >Properties</h3>
    <table style="margin: 0% 5% 2% 10%">
      <tr>
        <td class="head">Length</td>
        <td class="detail"> xxx mm</td>
        <td class="right-hand" rowspan="5"> Car image</td>
      </tr>
      <tr>
        <td class="head">Width</td>
        <td class="detail"> xxx mm</td>
      </tr>
      <tr>
        <td class="head">Height</td>
        <td class="detail"> xxx mm</td>
      </tr>
      <tr>
        <td class="head">Max speed</td>
        <td class="detail"> xx km/h </td>
      </tr>
      <tr>
        <td class="head">Acceleration (0 to 60)</td>
        <td class="detail"> xx-xx Seconds</td>
        <td class="right-hand" style="margin-left: 15%;">
          <button id="silver" class="colorbutton">  </button>
          <button id="black" class="colorbutton">  </button>
          <button id="white" class="colorbutton">  </button>
        </td>
      </tr>

    </table>


    <p style="margin-left: 10%;">Price: XX,XXX,XXX Baht</p>
    <br>

    <center>
      <button class="button">Booking</button>
      <br>
      <br>
      <br>

      <h3>COMMENT</h3>
      <textarea style="color: #7c7c7c; margin:0% 0% 3% 0%;" rows="6" cols="50">comment here...</textarea>
      <br>
      <button class="button" style="margin:0% 0% 0% 20%;">Comment</button>

      </center>
      <br>
      <hr style="margin-top: 3%; border-top: 1px solid #f2f2f2; ">

    <h2 style="margin: 1% 0% 2% 25%; color: #333333;"> Dude1 <span style="font-size: 14px;"> : 12/12/2017</span></h2>
    <p> <span style="margin: 1% 0% 2% 30%; color: grey;">  comment comment comment comment comment comment comment comment comment </span> </p>
      <hr style="margin-top: 2%; border-top: 1px solid #f2f2f2;">
    <br>


  </body>

</html>
