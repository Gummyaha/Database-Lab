<?php  session_start();
  require_once('connect.php');
  if(!isset($_SESSION['ID'])){
    header('Location:login.php');
  }

 ?>
<html>

<link rel="stylesheet" href="user.css"/>
  <head>
    <title> User Profile </title>
  </head>

  <header>
<!--MENU Bar-->
<?php
require_once('menu.php');
?>
    </header>

    <body>
      <img class="head" style="margin: 5% -5% 5% 0%;" src="User-Head.png"><br>
<?php
  $q = 'SELECT fName,lName FROM customer where customerID = '.$_SESSION['ID'];
  $results = $mysqli -> query($q);
  $user = $results ->fetch_array();
 ?>
      <center>
      <h1 style="margin: 5% 0% 0% 0%;"><?php echo $user['fName']." ".$user['lName']?></h1>
      </center>

      <img src="your booking.png"><br>

      <table>
        <tr>
          <th>Brand</th>
          <th>Model</th>
          <th>Location</th>
          <th>Date</th>
          <th>Approved</th>
        </tr>
        <?php
          $q = 'SELECT * FROM booking where customerID = '.$_SESSION['ID'];
          $results = $mysqli -> query($q);
          $user = $results ->fetch_array();
         ?>
        <?php
        $q ='SELECT booking.approved, brandName,
        branch.name as branchName,booking.date, product.name as prodName
        from booking,customer,branch,product,brands
        WHERE customer.customerID = booking.customerID
        AND booking.branchID = branch.branchID AND product.productID = booking.productID
        and brands.brandID = product.manufacturer and customer.customerID = '.$_SESSION['ID'];

        $result = $mysqli->query($q.' and date >= CURDATE()');
        while($row = $result->fetch_array()){
          echo '<tr>';
          echo '<td>'.$row['brandName'].'</td>';
          echo '<td>'.$row['prodName'].'</td>';
          echo '<td>'.$row['branchName'].'</td>';
          echo '<td>'.$row['date'].'</td>';
          echo '<td>';
          if($row['approved'] == 0){
            echo 'Waiting';
          }elseif($row['approved'] == 1){
            echo 'No';
          }else{
            echo 'Yes';
          }

          echo '</td>';
          echo '</tr>';
        }
        ?>

      </table>
      <img style="margin: 0% 0% 0% 3%;" src="prebook.png"><br>
      <table>
        <tr>
          <th>Brand</th>
          <th>Model</th>
          <th>Location</th>
          <th>Date</th>
          <th>Approved</th>
        </tr>
        <?php
        $result = $mysqli->query($q.' and date < CURDATE()');
        while($row = $result->fetch_array()){
          echo '<tr>';
          echo '<td>'.$row['brandName'].'</td>';
          echo '<td>'.$row['prodName'].'</td>';
          echo '<td>'.$row['branchName'].'</td>';
          echo '<td>'.$row['date'].'</td>';
          echo '<td>';
          if($row['approved'] == 0){
            echo 'Waiting';
          }elseif($row['approved'] == 1){
            echo 'No';
          }else{
            echo 'Yes';
          }

          echo '</td>';
          echo '</tr>';
        }
        ?>
      </table>

      <img style="margin: 0% 0% 0% 0%;" src="ownedcars.png"><br>
      <table>
        <tr>
          <th>Date of Purchase</th>
          <th>Model</th>
          <th>Location of Purchase</th>
          <th>Manufacturer</th>
        </tr>
      <?php   $q ='SELECT branch.name as branchName, product.name as prodName, sales.date,brandName
        from sales,branch,product,brands
        WHERE sales.branchID = branch.branchID AND product.productID = sales.productID and product.manufacturer = brands.brandID';
        $result = $mysqli->query($q);
        while($row = $result->fetch_array()){
          echo '<tr>';
          echo '<td>'.$row['date'].'</td>';
          echo '<td>'.$row['prodName'].'</td>';
          echo '<td>'.$row['branchName'].'</td>';
          echo '<td>'.$row['brandName'].'</td>';
          echo '</tr>';
        }
       ?>

    </table>
    <img style="margin: 0% 0% 0% 2%;" src="repaired.png"><br>
    </body>
</html>
