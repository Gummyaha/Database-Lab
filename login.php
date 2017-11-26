<?php
//session storage

?>
<html>
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="model.css"/>
<head>
  <title> ADMIN </title>
</head>

<body>

  <header>
    <!--MENU Bar-->
    <?php
    require_once('menu.php');

    ?>
  </header>


  <br>
  <br>
  <br>
  <center style="margin: 50px;">

    <form action="loginCheck.php" method = "post">
      <div style="width: 40%; padding: 5%;">
        <td>
          <tr class = "loginBox";>

            <?php
            if(isset($_SESSION["user"])){
              echo '<button type="submit" name="logOut" value = "logOut">Log Out</button></td></tr>';

            }else{
              echo '<label><b>Username:</b></label>
              <input type="text" placeholder="Enter Username" name="user" required><br>
              </tr>
              <tr>
              <label><b>Password:</b></label>
              <input type="password" placeholder="Enter Password" name="password" required><br>
              </tr>
              <button type="submit">Login</button>
              </form>
              <form action = "signup.php">
              <button class="signup">Sign Up</button>
              <input type="checkbox" checked="checked"> Remember me
              </form>';


            }
            if(isset($_SESSION['logError'])){
            if($_SESSION['logError']=='disabled'){
              echo 'Account is diabled, please contact an Administrator';
            }else if($_SESSION['logError']=='wrong'){
              echo 'Password is incorrect';
            }else if($_SESSION['logError']=='notFound'){
              echo 'Account does not exist';
            }
            unset($_SESSION['logError']);
          }
            ?>
          </div>
          <?php

          ?>
        </center>



      </body>
      </html>
