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
  <head>
    <title> Add Sales </title>
  </head>

  <body>

  <header>
<!--MENU Bar-->
      <div class= "container">
        <?php require_once("menu.php");?>
      </div>
    </header>
    <center>
      <!-- <label style = "font-size: 30;">ADD PRODUCT<label> -->
      <img style="margin-top: 2%;" src="salestable.png">
      <br>
      <br>
    <table>
      <tr>
        <form action="add.php" method = "post">
          <input type = "hidden" name = "page" value = "sales">
        <td style="width: 30%;">
          <b><label>Customer:</label></b>
        </td>
        <td>
          <select name='customer'>
            <?php
            $q = 'SELECT  CONCAT(fName," ",lName) as customerName,customerID FROM customer';
            $result = $mysqli->query($q);
            while($row = $result->fetch_array()){
              echo '<option  value="'.$row['customerID'].'">'.$row['customerName'].'</option>';
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Product:</label></b>
        </td>
        <td>
          <select name='product'>
            <?php
            $q = 'SELECT name,productID FROM product';
            $result = $mysqli->query($q);
            while($row = $result->fetch_array()){
              echo '<option value="'.$row['productID'].'">'.$row['name'].'</option>';
            }
            ?>
          </select>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Date:</label></b>
        </td>
        <td>
          <input type="date" name="date" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Branch:</label></b>
        </td>
        <td>
          <select name='branch'>
            <?php
            $q = 'SELECT name,branchID FROM branch';
            $result = $mysqli->query($q);
            while($row = $result->fetch_array()){
              echo '<option value="'.$row['branchID'].'">'.$row['name'].'</option>';
            }
            ?>
          </select>
        </td>

      </tr>
      </tr>

    </table>
      <input class="button" type = "submit">
    </form>
  </center>
</body>
</html>
