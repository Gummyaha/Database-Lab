<?php session_start(); ?>
<html>
  <head>
    <title> Login </title>
    <link rel="stylesheet" href="main.css"/>
  </head>

  <header>
    <?php
    require_once('menu.php');
    ?>
  </header>
  <body>
    <!-- <h1 style = "margin: 5% 0% 5% 10%">Product Table</h1> -->
  <img style="margin: 2% 0% 5% 0%;" src="login-table.png">

  <center>
    <table class="usertable" style="border-collapse: collapse; width: 60%;">
      <tr style = "background-color:#f2f2f2;" >

        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">LOGIN ID</th>
        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Username</th>
        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Error</th>
        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Time</th>

      </tr>
        <?php
        $q = "select * from loginlog";
        $result = $mysqli->query($q);
        if ($result) {
            while($row = $result->fetch_array()){
              echo "<tr>";
              echo "<td>".$row['logID'] ."</td>";
              echo "<td>".$row['username'] ."</td>";
              echo "<td>".$row['error'] ."</td>";
              echo "<td>".$row['time'] ."</td>";
              echo "</tr>";


            }
        }else{
          echo "Something went wrong";
        }


        ?>
    </table>

  <br>
  <br>
        <a href="admin.php"><button class="button" style= "padding: .5% 2% .5% 2%;">BACK</button></a>

  </center>

  </body>
  </html>

</html>
