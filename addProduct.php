<?php session_start(); ?>
<html>
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="model.css"/>
<?php
require_once("connect.php");
 ?>
  <head>
    <title> ADD PRODUCT </title>
  </head>

  <body>

    <header>
  <?php require_once('menu.php'); ?>
      </header>
      
    <center>
      <!-- <label style = "font-size: 30;">ADD PRODUCT<label> -->
      <img style="margin-top: 2%;" src="addproduct.png">
      <br>
      <br>
    <table>
      <tr>
        <form action="add.php" method = "post">
          <input type = "hidden" name = "page" value = "product">
        <td style="width: 30%;">
          <b><label>Product Name:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Product Name" name="prodName" required>
        </td>
      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Manufacturer:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Manufacturer" name="manu" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Price:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Price" name="price" required>

        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Description:</label></b>
        </td>
        <td>
          <textarea rows="5" cols="70" name = 'desc' placeholer = "Enter Description"></textarea>
        </td>

      </tr>
      </tr>

    </table>
      <input class="button" type = "submit">
    </form>
  </center>
</body>
</html>
