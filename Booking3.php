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
    <img class="ChooseBrand" style="float: right; width:90%"; src="Head-Confirm.png">

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

  <!--Confirm example-->
  <center>
    <br>
    <br>
    <h2>" Mercedes-Maybach 6 "</h2>
    <br>
    <img style="width: 65%; height: auto;" src="maybach.png">
    <br>
    <br>
    <table>
      <tr>
        <td style="font-size: 1.3rem;">
          <b>Brand:</b>
        </td>
        <td style="font-size: 1.3rem; margin-left: 2%;">
          Mercedes-Benz
        </td>
      </tr>

      <tr>
        <td style="font-size: 1.3rem;">
          <b>Model:</b>
        </td>
        <td style="font-size: 1.3rem; margin-left: 2%;">
          Maybach 6
        </td>
      </tr>

      <tr>
        <td style="font-size: 1.3rem;">
          <b>Price:</b>
        </td>
        <td style="font-size: 1.3rem; margin-left: 2%;">
          555,555,555 ฿
        </td>
      </tr>

      <tr>
        <td style="font-size: 1.3rem;">
          <b>Your Location:</b>
        </td>
        <td style="font-size: 1.3rem; margin-left: 2%;">
          1/23 sdvfwslaknfiegns;egnsengserngtrks'nbnksb
        </td>
      </tr>
    </table>
  </center>

<br>
<br>

    <center>
      <button id="confirm-button" class="confirm-button"> CONFIRM!</button>

      <!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <p>Thank you!</p>
        </div>
      </div>

    </center>
      <a href="Booking.php"><button class="button"> < Back</button></a>

      <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("confirm-button");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
          }

          // When the user clicks on <span> (x), close the modal
          span.onclick = function() {
            modal.style.display = "none";
          }

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
              }
            }
      </script>

</body>
