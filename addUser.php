<?php session_start();
if(isset($_SESSION['role'])){
  if($_SESSION['role'] == 0){
    header('Location: user.php');
  }
}else{
  header('Location: login.php');
}?>
<html>
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="model.css"/>
<?php
require_once("connect.php");
 ?>
  <head>
    <title> Add User </title>
  </head>

  <body>
    <header>
    <?php require_once('menu.php'); ?>
      </header>
    <center>
      <br>
      <br>
      <br>
      <br>
      <!-- <label style = "font-size: 30; margin-bottom: 3%;">ADD USER<label> -->
      <img style="margin-top: -3%;" src="Adduser.png">
        <br>
        <br>
    <table>
      <tr>
        <form action="add.php" method = "post">
          <input type = "hidden" name = "page"  value = "customer">
        <td style="width: 30%;">
          <b><label>First Name:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter First Name" name="fname" required>
        </td>
      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Last Name:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Last Name" name="lname" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Userame:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Username" name="user" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Email:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Email" name="email" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Password:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Password" name="pass" required>
        </td>

      </tr>

    </table>

    <br>
      <input class="button" type = "submit"><br>


    </form>
  </center>
</body>
</html>
