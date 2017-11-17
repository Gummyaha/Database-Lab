<html>
<?php
require_once("connect.php");
if(isset($_GET['user'])){
  $ID = $_GET['user'];
  $q = "select * from customer where customerID = '$ID'";
  $result = $mysqli->query($q);
  $row = $result->fetch_array();
}else{
  header("Location: user-table.php");
}

?>
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="model.css"/>
  <head>
    <title> EDIT USER </title>
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
              LOG OUT
              </a></li>

          </ul>
        </nav>
      </div>
    </header>
    <center>
      <label style = "font-size: 30;">ADD USER<label>
    <table style = "border-style: groove">
    <tr>
      <td style="width: 30%;">
        <b><label>Customer ID:</label></b>
      </td>
      <td>
        <input type="hidden" name = 'ID' value =<?php echo '"'.$row['customerID'].'"'; ?>>
        <input type="text" value =
          <?php echo '"'.$row['customerID'].'"'; ?>
        placeholder="Enter First Name" name="IDhehe" required disabled>
      </td>
    </tr>
      <tr>
        <form action="edit.php" method = "post">
          <input type = "hidden" value = "customer">
        <td style="width: 30%;">
          <b><label>First Name:</label></b>
        </td>
        <td>
          <input type="text" value =
            <?php echo '"'.$row['fname'].'"'; ?>
          placeholder="Enter First Name" name="fname" required>
        </td>
      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Last Name:</label></b>
        </td>
        <td>
          <input type="text" value =
            <?php echo '"'.$row['lname'].'"'; ?>
            placeholder="Enter Last Name" name="lname" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Userame:</label></b>
        </td>
        <td>
          <input type="text" value =
            <?php echo '"'.$row['username'].'"'; ?>
            placeholder="Enter Username" name="user" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Email:</label></b>
        </td>
        <td>
          <input type="text" value =
            <?php echo '"'.$row['email'].'"'; ?>
            placeholder="Enter Email" name="email" required>
        </td>

      </tr>

    </table>
      <input type = "submit">
    </form>
  </center>
</body>
</html>
