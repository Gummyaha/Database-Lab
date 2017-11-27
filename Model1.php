<?php session_start(); ?>
<html>

<?php
require_once("connect.php");


 ?>

<head>
  <title> Models </title>
  <!-- <link rel="stylesheet" href="main.css"/> -->
  <link rel="stylesheet" href="Booking.css"/>
  <header>
<!--MENU Bar-->
<?php
require_once('menu.php');
?>
  </header>

  <img style="margin-top: 2%; margin-bottom: 2%;" src="Model1-head.png">

</head>

<body>


  <img class="ChooseBrand" style="float: right; width:85%; margin-bottom: 2%;"; src="Head-Choose-Brand.png">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <form action = "Model2.php" method="post">

    <center>
      <table>
          <td class = "letter-header" colspan = 7>
            <center>
            <?php
            $letters = range('A', 'Z');
            foreach($letters as $let){
              echo '<a class="letters" href = "?filter='.$let.'">'.$let.'</a>';
              echo ' ';
            }
            echo '<a class="letters" href = "?"> | ALL</a>';
            ?>

          </center>
          </td>
        <?php
        if(isset($_GET['filter'])){
          $q = 'SELECT * FROM brands where brandName LIKE "'.$_GET['filter'].'%"';
          //echo $q;
        }else{
          $q = 'SELECT * FROM brands';
      }
        $result = $mysqli->query($q);

        $count = 0;
        echo "<tr>";
        while($row = $result -> fetch_array()){
          $name = $row['brandName'];
          $img = $row['logoURL'];
          $id = $row['brandID'];
          echo '<td class="car-logo">';
          echo '<label for="'.$id.'"><img class="LogoBrand" src="'.$img.'" alt="'.$name.'">';
          echo '<center><br><br>';
          echo '<input type="radio" class ="radio"  name="select" value="'.$id.'" id = "'.$id.'"></label></center>';


          echo "</td>";
          $count = $count +1;
          if ($count >= 7){
            $count = 0;
            echo'<tr></tr>';
          }

        }


        ?>
        </tr>
      </table>
    </center>
    <input style="float: right;" type=submit class = 'button fixed-button' VALUE="NEXT STEP">
  </form>

</body>

</html>
