<?php session_start(); ?>
<html>
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="model.css"/>
<?php
require_once("connect.php");
 ?>
  <head>
    <title> EDIT STAFF </title>
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
      <img style="margin-top: -3%;" src="Addstaff.png">
        <br>
        <br>
    <table>
      <tr>
        <?php
        $q = 'SELECT * FROM staff WHERE staffID = '.$_GET['user'];
        $results = $mysqli->query($q);
        $row = $results->fetch_array();
         ?>

        <td style="width: 30%;">
            <b><label>Customer ID:</label></b>
          </td>
          <td>
          <form action="edit.php" method = "post">
            <input type = "hidden" name = "page"  value = "staff">
            <input type="hidden" name = 'ID' value =<?php echo '"'.$row['staffID'].'"'; ?>>
            <input type="text" value =
              <?php echo '"'.$row['staffID'].'"'; ?>
            placeholder="Enter ID" disabled>
          </td>
        </tr>
        <tr>
        <td style="width: 30%;">
          <b><label>First Name:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter First Name" value = <?php echo $row['fName']; ?> name="fname" required>
        </td>
      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Last Name:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Last Name" value = <?php echo $row['lName']; ?> name="lname" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Userame:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Username" value = <?php echo $row['username']; ?>  name="user" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Email:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Email" value = <?php echo $row['email']; ?>  name="email" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Password:</label></b>
        </td>
        <td>
          <input type="text" placeholder="Enter Password" value = <?php echo $row['password']; ?> name="password" required>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Role:</label></b>
        </td>
        <td>
          <select name='role' required>
            <?php
            $q = 'SELECT * FROM role LIMIT 1,20';
            $result = $mysqli->query($q);
            while($row2 = $result->fetch_array()){
              echo '<option ';
              if($row['type'] == $row2['roleID']){
                echo 'selected';
              }
              echo ' value="'.$row2['roleID'].'">'.$row2['name'].'</option>';
            }
            ?>
        </td>

      </tr>
      <tr>
        <td style="width: 30%;">
          <b><label>Branch:</label></b>
        </td>
        <td>
          <select name='branch' required>
            <?php
            $q = 'SELECT * FROM branch';
            $result = $mysqli->query($q);
            while($row2 = $result->fetch_array()){
              echo '<option ';
              if($row['branchID'] == $row2['branchID']){
                echo 'selected';
              }
              echo ' value="'.$row2['branchID'].'">'.$row2['name'].'</option>';
            }
            ?>
          </select>
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

    <br>
      <input class="button" type = "submit"><br>


    </form>
  </center>
</body>
</html>
