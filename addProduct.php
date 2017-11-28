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
    <title> Add Product </title>
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
          <select name='manu' required>
            <?php
            $q = 'SELECT * from brands';
            $result = $mysqli->query($q);
            while($row = $result->fetch_array()){
              echo '<option value="'.$row['brandID'].'">'.$row['brandName'].'</option>';
            }
            ?>
          </select>
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
          <b><label>Length:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Length" name="length" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Width:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Length" name="width" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Height:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Length" name="height" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Acceleration:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Length" name="acc" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Max Speed:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Length" name="max" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Description:</label></b>
        </td>
        <td>
          <textarea rows="5" cols="70" name = 'desc' placeholer = "Enter Description" required></textarea>
        </td>

      </tr>
      </tr>

    </table>
      <input class="button" type = "submit">
    </form>
  </center>
</body>
</html>
