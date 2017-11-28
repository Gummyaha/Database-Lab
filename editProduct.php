<?php session_start();
if(isset($_SESSION['role'])){
  if($_SESSION['role'] == 0){
    header('Location: user.php');
  }elseif($_SESSION['role'] == 1){
    header('Location: staff.php');
  }
}else{
  header('Location: login.php');
}
require_once("connect.php");
if(isset($_GET['prod'])){
  $prodID = $_GET['prod'];
  $q = "select * from product where productID = '$prodID'";
  $result = $mysqli->query($q);
  $row = $result->fetch_array();
}else{
  header("Location: product-table.php");
}

?>
<html>
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="model.css"/>
<head>
  <title> Edit Product </title>
</head>

<body>

  <header>
    <!--MENU Bar-->
    <?php
    require_once('menu.php');
    ?>
  </header>
  <center>
    <br><br><br><br>
    <label style = "font-size: 30;">EDIT PRODUCT<label>
      <table style = "border-style: groove">
        <tr>
          <form action="edit.php" method = "post">
            <input type = "hidden" name = "page" value = "product">
            <input type="hidden" value =<?php echo '"'.$row['productID'].'"'; ?> name="ID">
            <td style="width: 30%;">
              <b><label>Product ID:</label></b>
            </td>
            <td>
              <input type="text" value =
              <?php echo '"'.$row['productID'].'"'; ?>
              placeholder="Enter Product Name" name="IDhehe" required disabled>
            </td>
          </tr>
          <tr>
            <td style="width: 30%;">
              <b><label>Product Name:</label></b>
            </td>
            <td>
              <input type="text" value = <?php echo '"'.$row['name'].'"'; ?> placeholder="Enter Product Name" name="prodName" required>
            </td>
          </tr>
          <tr>
            <td style="width: 30%;">
              <b><label>Manufacturer:</label></b>
            </td>
            <td>
              <input type="text" value =
              <?php echo '"'.$row['manufacturer'].'"'; ?>
              placeholder="Enter Manufacturer" name="manu" required>
            </td>

          </tr>
          <tr>
            <td style="width: 30%;">
              <b><label>Price:</label></b>
            </td>
            <td>
              <input type="text" value =
              <?php echo '"'.$row['price'].'"'; ?>
              placeholder="Enter Price" name="price" required>

            </td>

          </tr>
          <tr>
            <td style="width: 30%;">
              <b><label>Length:</label></b>
            </td>
            <td>
              <input type="text" placeholder="Enter Length" value =
              <?php echo '"'.$row['length'].'"'; ?> name="length" required>
            </td>

          </tr>
          <tr>
            <td style="width: 30%;">
              <b><label>Width:</label></b>
            </td>
            <td>
              <input type="text" placeholder="Enter Length" value =
              <?php echo '"'.$row['width'].'"'; ?> name="width" required>
            </td>

          </tr>
          <tr>
            <td style="width: 30%;">
              <b><label>Height:</label></b>
            </td>
            <td>
              <input type="text" placeholder="Enter Length" value =
              <?php echo '"'.$row['height'].'"'; ?> name="height" required>
            </td>

          </tr>
          <tr>
            <td style="width: 30%;">
              <b><label>Acceleration:</label></b>
            </td>
            <td>
              <input type="text" placeholder="Enter Length" value =
              <?php echo '"'.$row['acceleration'].'"'; ?> name="acc" required>
            </td>

          </tr>
          <tr>
            <td style="width: 30%;">
              <b><label>Max Speed:</label></b>
            </td>
            <td>
              <input type="text" placeholder="Enter Length" value =
              <?php echo '"'.$row['maxSpeed'].'"'; ?> name="max" required>
            </td>

          </tr>
          <tr>
            <td style="width: 30%;">
              <b><label>Description:</label></b>
            </td>
            <td>
              <textarea rows="3" cols="70" name = 'desc' placeholer = "Enter Description"><?php echo $row['description']; ?></textarea>
            </td>

          </tr>
          <tr>
            <td style="width: 30%;">
              <b><label>Disable:</label></b>
            </td>
            <td>
              <input type="checkbox"
                <?php if($row['disabled'] ==  1) echo 'checked'; ?>
                name="disable">
            </td>

          </tr>

      </table>
      <input type = "submit">
    </form>
  </center>
</body>
</html>
