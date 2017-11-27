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
      <?php
      require_once('menu.php');
      ?>
    </header>
    <center>
      <label style = "font-size: 30;">EDIT USER<label>
    <table style = "border-style: groove">
    <tr>
      <td style="width: 30%;">
        <b><label>Customer ID:</label></b>
      </td>
      <td>
      <form action="edit.php" method = "post">
        <input type="hidden" name = 'ID' value =<?php echo '"'.$row['customerID'].'"'; ?>>
        <input type="text" value =
          <?php echo '"'.$row['customerID'].'"'; ?>
        placeholder="Enter ID" name="IDhehe" required disabled>
      </td>
    </tr>
      <tr>

          <input type = "hidden" value = "customer" name = "page">
        <td style="width: 30%;">
          <b><label>First Name:</label></b>
        </td>
        <td>
          <input type="text" value =
            <?php echo '"'.$row['fName'].'"'; ?>
          placeholder="Enter First Name" name="fname" required>
        </td>
      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Last Name:</label></b>
        </td>
        <td>
          <input type="text" value =
            <?php echo '"'.$row['lName'].'"'; ?>
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
      <tr>
        <td style="width: 30%;">
          <b><label>Password:</label></b>
        </td>
        <td>
          <input type="text" value =
            <?php echo '"'.$row['password'].'"'; ?>
            placeholder="Enter Password" name="password" required>
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
