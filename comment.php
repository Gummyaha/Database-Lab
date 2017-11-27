<?php
    require_once('connect.php');
    session_start();
    if(isset($_SESSION['ID']) and isset($_POST['comment']) and isset($_POST['model']) and $_SESSION['role'] != 2 ){
      $q = "INSERT INTO comments (productID, text, customerID)
      VALUES ('".$_POST['model']."','".$_POST['comment']."','".$_SESSION['ID']."')";
      $results = $mysqli->query($q);
        header('Location: Model.php?model='.$_POST['model'].'#comment');
    }else{
      header('Location: login.php');
      //change this to model select screen after fern sends
    }

?>
