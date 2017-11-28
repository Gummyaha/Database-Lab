<?php session_start(); ?>
<html>

<?php
require_once("connect.php");
if(isset($_POST['product']) and isset($_POST['image'])){
  $imageFileType = pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION);
  $target_file = "car-img/".$_POST['product'].'_'.$_POST['image'].'.'.$imageFileType;

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
      $uploaded = 1;
      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    } else {
      $uploaded = 0;
    }
  }else{

  }
}
?>

<head>
  <title> Upload Image </title>
  <link rel="stylesheet" href="main.css"/>
  <header>
    <!--MENU Bar-->
    <?php
    require_once('menu.php');
    ?>
  </header>
  <center>
    <!-- <label style = "font-size: 30;">ADD PRODUCT<label> -->
    <img style="margin-top: 2%; margin-bottom: 5%;" src="uploadimg.png">
  </head>

  <body>
    <h2> Choose image to upload: </h2>
    <center>
      <table>
        <th>Image Number</th>
        <th>Model</th>
        <tr>
          <form action='upload-img.php' method='post' enctype="multipart/form-data">
            <td style="margin:15% 5% 15% 5%;">
              <select name = 'image'>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </td>
            <td style="margin:15% 5% 15% 5%;">
              <select name = 'product'>
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
        </table>
      </select>
      <br>
      <br>
      <input style="margin-left: 6%" type="file" name="image">
      <br>
      <br>
      <input type="submit" value="Upload Image" name="submit" class="button">
      <br>
      <?php
      if(isset($uploaded)){
        if($uploaded==1){
          echo 'Upload Complete';
        }else{
          echo 'Upload Failed';
        }
      }
      ?>
    </form>
  </center>
</body>

</html>
