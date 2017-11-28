<?php session_start();
if(!isset($_SESSION['user'])){
  header("Location:login.php");
}
?>
<html>
<link rel="stylesheet" href="Booking.css"/>
<head>s
  <title> THE CAR : Booking</title>
</head>

<header>
  <!--MENU Bar-->
  <?php
  require_once('menu.php');

  ?>
</header>


<body>
  <img class="banner" src="Banner-Car3.png">
  <img class="ChooseBrand" style="float: right; width:100%"; src="Head-Choose-Brand.png">
  <form action = "Booking2.php" method="post">

    <center>
      <table>
          <td class = "letter-header" colspan = 7 id='let'>
            <center>
            <?php
            $letters = range('A', 'Z');
            foreach($letters as $let){
              echo '<a class="letters" href = "?filter='.$let.'#let">'.$let.'</a>';
              echo ' ';
            }
            echo '<a class="letters" href = "?#let"> | ALL</a>';
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
    <input type=submit class = 'button fixed-button' VALUE="NEXT STEP">
  </form>
</body>
</html>
