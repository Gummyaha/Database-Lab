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
    <title> Add Repairs </title>
  </head>

  <body>

    <header>
  <?php require_once('menu.php'); ?>
      </header>

    <center>
      <!-- <label style = "font-size: 30;">ADD PRODUCT<label> -->
      <img style="margin-top: 2%;" src="addrepair.png">

      <br>
      <br>
    <table>
      <tr>
        <form action="add.php" method = "post">
          <input type = "hidden" name = "page" value = "repair">
        <td style="width: 30%;">
          <b><label>Price:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Price" name="price" required>
        </td>
      </tr>
      <tr>
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
          <b><label>Model:</label></b>
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
      <tr>
        <td style="width: 30%;">
          <b><label>Details:</label></b>
        </td>
        <td>
          <textarea rows="5" cols="70" name = 'details' placeholer = "Enter Details" maxlength="200" required></textarea>
        </td>

      </tr>
      </tr>

    </table>
      <input class="button" type = "submit">
    </form>
  </center>
</body>
</html>
