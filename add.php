<?php
    require_once('connect.php');
    session_start();
  //adding to both, if it didn't come from an add page, redirects to index.
  if(isset($_POST['page'])){
    if($_POST['page'] == 'product'){
        $name = $_POST['prodName'];
        $price= $_POST['price'];
        $manu = $_POST['manu'];
        $desc = $_POST['desc'];
        $q = "INSERT INTO product (price, name, manufacturer, description)
        VALUES ('".$price."','".$name."','".$manu."','".$desc."')";
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
    }
  }else{
    header("Location: Index.php");
  }

?>
