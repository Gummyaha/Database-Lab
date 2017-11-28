<?php session_start();
if(isset($_SESSION['role'])){
  if($_SESSION['role'] == 0){
    header('Location: user.php');
  }
}
?>
<html>

<?php
require_once("connect.php");
?>

<head>
  <title> Booking Table</title>
  <link rel="stylesheet" href="main.css"/>
  <header>

    <?php
    require_once('menu.php');
    ?>
  </header>
  </head>


<body>
  <!-- <h1 style = "margin: 5% 0% 5% 10%">Product Table</h1> -->
  <img style="margin: 2% 0% 5% 0%;" src="booking-table.png">

  <center>
    <table class="usertable" style="border-collapse: collapse; width: 60%;">
      <tr style = "background-color:#f2f2f2;" >

        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Date</th>
        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Customer Name</th>
        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Car Name</th>
        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Location</th>
        <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Status</th>
        <?PHP  if($_SESSION['role'] == 2){
          echo '<th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Approve</th>';
        }
          ?>
      </tr>
      <tr>
        <td>
          <form action=booking-table.php>
          Filters:<br>
          <input type="date" name="date">
        </td>
        <td>
          <!-- customer name -->
          <select name='customer'>
            <option value="a">All</option>
            <?php
            $q = 'SELECT DISTINCT CONCAT(fName," ",lName) as customerName, booking.customerID FROM booking,customer where booking.customerID = customer.CustomerID';
            $result = $mysqli->query($q);
            while($row = $result->fetch_array()){
              echo '<option ';
              if(isset($_GET['customer']) and $_GET['customer'] == $row['customerID']){
                echo 'selected';
              }
              echo ' value="'.$row['customerID'].'">'.$row['customerName'].'</option>';
            }
            ?>
          </select>
        </td>
        <td>
          <select name='car'>
            <option value="a">All</option>
            <?php
            $q = 'SELECT DISTINCT product.name as prodName, booking.productID from booking, product WHERE booking.productID = product.productID';
            $result = $mysqli->query($q);
            while($row = $result->fetch_array()){
              echo '<option ';
              if(isset($_GET['car']) and $_GET['car'] == $row['productID']){
                echo 'selected';
              }
              echo ' value="'.$row['productID'].'">'.$row['prodName'].'</option>';
            }
            ?>
          </select>
        </td>
        <td>
          <select name='branch'>
            <option value="a">All</option>
            <?php
            $qS = 'SELECT * FROM branch';
            $resultS = $mysqli->query($qS);
            while($rowS = $resultS->fetch_array()){
              echo '<option ';
              if(isset($_GET['branch']) and $_GET['branch'] == $row['branchID']){
                echo 'selected';
              }
              echo ' value="'.$rowS['branchID'].'">'.$rowS['name'].'</option>';
            }
            ?>
          </select>
        </td>
        <td>
          <select name = 'approved'>
            <option value="a"
            <?php if(isset($_GET['approved']) and $_GET['approved'] == 'a'){
              echo ' selected ';
            } ?> >All</option>
            <option value="2"<?php if(isset($_GET['approved']) and $_GET['approved'] == '2'){
              echo ' selected ';
            } ?>>Yes</option>
            <option value="1"<?php if(isset($_GET['approved']) and $_GET['approved'] == '1'){
              echo ' selected ';
            } ?>>No</option>
            <option value="0"<?php if(isset($_GET['approved']) and $_GET['approved'] == '0'){
              echo ' selected ';
            } ?>>Waiting</option>
          </select>
        </td>
        <td>
          <input type='submit' value = 'Filter'></input>
        </form>
        </td>
      </tr>
      <?php
      $q ='SELECT booking.approved,bookingID, fName,lName,branch.name as branchName, product.name as prodName, booking.date
      from booking,customer,branch,product
      WHERE customer.customerID = booking.customerID
      AND booking.branchID = branch.branchID AND product.productID = booking.productID';
      if(isset($_GET['customer']) and $_GET['customer'] != 'a'){
        $q = $q.' AND booking.customerID = '.$_GET['customer'];
      }
      if(isset($_GET['car']) and $_GET['car'] != 'a'){
        $q = $q.' AND booking.productID = '.$_GET['car'];
      }
      if(isset($_GET['branch']) and $_GET['branch'] != 'a'){
        $q = $q.' AND booking.branchID = '.$_GET['branch'];
      }
      if(isset($_GET['approved']) and $_GET['approved'] != 'a'){
        $q = $q.' AND booking.approved = '.$_GET['approved'];
      }
      if(isset($_GET['date']) and $_GET['date'] !=''){
        $q = $q.' AND sales.date = '.$_GET['date'];
      }
      $q = $q.' ORDER BY date DESC';
      $result = $mysqli->query($q);
      while($row = $result->fetch_array()){
        echo '<tr>';
        echo '<td>'.$row['date'].'</td>';
        echo '<td>'.$row['fName'].' '.$row['lName'].'</td>';
        echo '<td>'.$row['prodName'].'</td>';
        echo '<td>'.$row['branchName'].'</td>';
        echo '<td>';
        if($row['approved'] == 0){
          echo 'Waiting';
        }elseif($row['approved'] == 1){
          echo 'No';
        }else{
          echo 'Yes';
        }

        echo '</td>';
        if($_SESSION['role'] == 2){
          echo "<td>";
          echo "<a href = 'approve.php?approve=2&id=".$row['bookingID']."'><button class='button' style = 'font-size:15; padding:5;color:white;border-style:none;background-color:#5bb75b;'>Approve </button></a><br>";
          echo "<a href = 'approve.php?approve=1&id=".$row['bookingID']."'><button class='button' style = 'font-size:15; padding:5;color:white;border-style:none;background-color:#d44944;'>Disapprove </button></a>";
          echo "</td>";
        }

        echo '</tr>';
      }
      ?>
    </table>


    <br>
    <br>
    <a href="admin.php"><button class="button">BACK</button></a>



  </center>

</body>
</html>
