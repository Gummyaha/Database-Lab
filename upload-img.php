<?php session_start(); ?>
<html>

<?php
require_once("connect.php");


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
      <tr>
        <td style="margin:15% 5% 15% 5%;">
          <select>
            <option value="image-number"> Image Number </option>
          </select>
        </td>
        <td style="margin:15% 5% 15% 5%;">
          <select>
            <option value="Model"> Model </option>
          </select>
        </td>
      </tr>
    </table>
    </select>
    <br>
    <br>
    <input style="margin-left: 6%" type="file" />
  </center>
</body>

</html>
