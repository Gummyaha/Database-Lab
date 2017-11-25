<?php
//session storage
session_start();
if(isset($_POST["user"])){
  $_SESSION["user"] = $_POST["user"];
}
if(isset($_POST["logOut"])){
  session_unset();
}
if(isset($_POST["user"]) && isset($_SESSION["prevPage"])){
  if($_SESSION["prevPage"] == "login" && $_POST["user"] == "Admin"){
    $_SESSION["prevPage"] ="admin";
    header("Location: admin.php");
  }else {
    $_SESSION["prevPage"] = "login";
  }
}else{
  $_SESSION["prevPage"] = "login";
}
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
    require_once('menu.php')
    ?>
    </header>


    <br>
    <br>
    <br>
    <center style="margin: 50px;">

      <form action="login.php" method = "post">
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
                <input type="checkbox" checked="checked"> Remember me
                </div>';
              }
              ?>
            </form>
          </center>



        </body>
        </html>
