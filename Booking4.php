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
    <?php
      if(isset($_POST['model']) and isset($_POST['branch']) and isset($_POST['date'])){
        $q = 'SELECT price, product.name as prodName,brandName,description, location, branch.name as branchName FROM product,brands,branch where brandID = manufacturer AND productID = '.$_POST['model'].' AND branchID = '.$_POST['branch'];
        //echo $q;
      }else{
        header('Location:Booking.php');
      }
    $results = $mysqli->query($q);
    $row = $results -> fetch_array();
    $insert = 'INSERT INTO `booking` (`customerID`, `branchID`, `approved`, `productID`, `date`) VALUES ("'.$_SESSION['user'].'", "'.$_POST['branch'].'", "0", "'.$_POST['model'].'", "'.$_POST['date'].'")';
    $mysqli->query($insert);
    ?>
    <h2>" <?php echo $row['prodName'] ?> "</h2>
    <br>
    <img style="width: 65%; height: auto;" src="maybach.png">
    <br>
    <br>
    <table>
      <tr>
        <td style="font-size: 1.3rem;">
          <b>Manufacturer:</b>
        </td>
        <td style="font-size: 1.3rem; margin-left: 2%;">
          <?php echo $row['brandName'] ?>
        </td>
      </tr>

      <tr>
        <td style="font-size: 1.3rem;">
          <b>Model:</b>
        </td>
        <td style="font-size: 1.3rem; margin-left: 2%;">
          <?php echo $row['prodName'] ?>
        </td>
      </tr>

      <tr>
        <td style="font-size: 1.3rem;">
          <b>Price:</b>
        </td>
        <td style="font-size: 1.3rem; margin-left: 2%;">
          <?php echo $row['price'] ?>
        </td>
      </tr>

      <tr>
        <td style="font-size: 1.3rem;">
          <b>Location:</b>
        </td>
        <td style="font-size: 1.3rem; margin-left: 2%;">
          <?php echo $row['location'] ?>
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
