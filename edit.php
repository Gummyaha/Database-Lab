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
        $id = $_POST['ID'];
        $name = $_POST['prodName'];
        $price= $_POST['price'];
        $manu = $_POST['manu'];
        $desc = $_POST['desc'];
        $q = "UPDATE product SET price = '$price', name = '$name',
        manufacturer = '$manu', description = '$desc',
        length = '".$_POST['length']."', width = '".$_POST['width']."', height = '".$_POST['height']."',
        maxSpeed = '".$_POST['max']."', acceleration = '".$_POST['acc']."' ";

        if(isset($_POST['disable'])){
          $disable = 1;
        }else{
          $disable =0;
        }
        $q=$q.", disabled = '".$disable."' WHERE productID = $id ";

        $results = $mysqli->query($q);
        if($results){
          header("Location: product-table.php");
        }else{
          echo "Failure to edit product";
        }
    }elseif($_POST['page']=='customer'){
        $id = $_POST['ID'];
        $fname = $_POST['fname'];
        $lname= $_POST['lname'];
        $uname= $_POST['user'];
        $email = $_POST['email'];
        $q = "UPDATE customer SET fName='$fname', lName='$lname', username='$uname', email='$email', password = '".$_POST['password']."'";
        if(isset($_POST['disable'])){
          $disable = 1;
        }else{
          $disable =0;
        }
        $q=$q.", disabled = '".$disable."' WHERE customerID = '$id'";
        $results = $mysqli->query($q);
        if($results){
          header("Location: user-table.php");
        }else{
          echo "Failure to edit customer";
        }
    }elseif($_POST['page']=='staff'){
        $id = $_POST['ID'];
        $fname = $_POST['fname'];
        $lname= $_POST['lname'];
        $uname= $_POST['user'];
        $email = $_POST['email'];
        $q = "UPDATE staff SET fName='$fname', lName='$lname', username='$uname', email='$email',type = '".$_POST['role']."', password = '".$_POST['password']."'";
        if(isset($_POST['disable'])){
          $disable = 1;
        }else{
          $disable =0;
        }
        $q=$q.", disabled = '".$disable."' WHERE staffID = '$id'";
        $results = $mysqli->query($q);
        if($results){
          header("Location: staff-table.php");
        }else{
          echo "Failure to edit customer";
        }
    }
  }else{
    header("Location: Index.php");
  }

?>
