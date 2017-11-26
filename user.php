<?php
  session_start();
 ?>
<html>

<link rel="stylesheet" href="user.css"/>
  <head>
    <title> User Profile </title>
  </head>

  <header>
<!--MENU Bar-->
<?php
require_once('menu.php');
?>
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
      <img style="margin: 0% 0% 0% 3%;" src="prebook.png"><br>
      <img style="margin: 0% 0% 0% 0%;" src="ownedcars.png"><br>
      <img style="margin: 0% 0% 0% 2%;" src="repaired.png"><br>

    </body>
</html>
