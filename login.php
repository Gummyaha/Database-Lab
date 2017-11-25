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
    header("Location: admin.html");
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
    <div class= "container">
      <nav class= "nav">
        <ul>
            <li><a href="index.php#home">HOME</a></li>
            <li><a href="index.php#news">NEWS</a></li>
            <li><a href="index.php#models">MODELS</a></li>
            <li><a href="index.php#contact">CONTACT US</a></li>
            <li></li>
            <li></li>
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
                <a href="signup.php"><button class="signup">SIGN UP</button></a>
                <input type="checkbox" checked="checked"> Remember me
                </div>';
              }
              ?>
            </form>
          </center>



        </body>
        </html>
