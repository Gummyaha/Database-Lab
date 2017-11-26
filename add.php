<?php
    require_once('connect.php');
    session_start();
    if(!isset($_SESSION['role'])){
      header('Location: login.php');
    }elseif($_SESSION['role'] != 2){
      header('Location: index.php');
    }
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
    }elseif($_POST['page']=='customer'){
        $fname = $_POST['fname'];
        $lname= $_POST['lname'];
        $uname= $_POST['user'];
        $email = $_POST['email'];
        $q = "INSERT INTO customer (fName, lName, username, email)
        VALUES ('".$fname."','".$lname."','".$uname."','".$email."')";
        $results = $mysqli->query($q);
        if($results){
          header("Location: user-table.php");
        }else{
          echo "Failure to add customer";
        }
    }
  }else{
    header("Location: Index.php");
  }

?>
