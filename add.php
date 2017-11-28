<?php session_start();
    require_once('connect.php');
  //adding to both, if it didn't come from an add page, redirects to index.
  if(isset($_POST['page'])){
    if($_POST['page'] == 'product'){
        $name = $_POST['prodName'];
        $price= $_POST['price'];
        $manu = $_POST['manu'];
        $desc = $_POST['desc'];
        $q = "INSERT INTO product (price, name, manufacturer, description,
        length,width,height,maxSpeed,acceleration)
        VALUES ('".$price."','".$name."','".$manu."','".$desc."','".
        $_POST['length']."','".$_POST['width']."','".$_POST['height']."','".$_POST['max']."','".$_POST['acc']."')";
        $results = $mysqli->query($q);
        if($results){
          header("Location: product-table.php");
        }else{
          echo "Failure to add product";
        }
    }elseif($_POST['page']=='customer' or $_POST['page']=='signup'){
        $fname = $_POST['fname'];
        $lname= $_POST['lname'];
        $uname= $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $q = "INSERT INTO customer (fName, lName, username, email, password)
        VALUES ('".$fname."','".$lname."','".$uname."','".$email."','".$pass."')";
        $results = $mysqli->query($q);
        if($results){
          if($_POST['page'] == 'customer'){
            header("Location: user-table.php");
          }else{
            header("Location: login.php?m=suc");
          }

        }else{
          echo "Failure to add customer";
        }
    }elseif($_POST['page']=='sales'){
        $q = "INSERT INTO sales (productID, customerID, date, branchID)
        VALUES ('".$_POST['product']."','".$_POST['customer']."','".$_POST['date']."','".$_POST['branch']."')";
        $results = $mysqli->query($q);
        if($results){
            header("Location: sales-table.php");
        }else{
          echo "Failure to add sale";
        }
  }elseif($_POST['page']=='staff'){
      $fname = $_POST['fname'];
      $lname= $_POST['lname'];
      $uname= $_POST['user'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $q = "INSERT INTO staff (fName, lName, username, email, password,type,branchID)
      VALUES ('".$fname."','".$lname."','".$uname."','".$email."','".$pass."','".$_POST['role']."','".$_POST['branch']."')";
      $results = $mysqli->query($q);
      if($results){
          header("Location: staff-table.php");


      }else{
        echo "Failure to add Staff";
      }
    }else{
        header("Location: Index.php");
    }
}
?>
