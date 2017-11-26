<?php require_once('connect.php');
      session_start();
      if(!isset($_SESSION['user'])){
        header('Location: login.php');
      }elseif($_SESSION['role'] == 0){
        header('Location: index.php');
      }
      if(isset($_GET['id']) and isset($_GET['approve'])){
          $q = 'UPDATE booking SET approved = '.$_GET['approve'].' WHERE bookingID = '.$_GET['id'];
          $mysqli->query($q);
          header('Location: booking-table.php');
      }

?>
