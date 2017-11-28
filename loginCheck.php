<?php session_start();
require_once('connect.php');

if(isset($_POST["user"]) and isset($_POST['password'])){
  $q = 'SELECT customerID, disabled, password, fName FROM customer where username = "'.$_POST['user'].'"';
  $results = $mysqli-> query($q);
  if($results -> num_rows == 0){
    $q2 = 'SELECT staffID, disabled, password, type, fName FROM staff where username = "'.$_POST['user'].'"';
    $results = $mysqli-> query($q2);
    if($results -> num_rows == 0){
      $_SESSION['logError'] = 'notFound';
    }else{
      $row = $results->fetch_array();
      if($row['password'] == $_POST['password']){
        if($row['disabled'] == 0){
          $_SESSION['user'] = $row['fName'];
          $_SESSION['ID'] = $row['staffID'];
          $_SESSION['role'] = $row['type'];
        }else{
          $_SESSION['logError'] = 'disabled';
        }
      }else{
          $_SESSION['logError'] = 'wrong';
      }
    }
  }else{
    $row = $results->fetch_array();
    if($row['password'] == $_POST['password']){
      if($row['disabled'] == 0){
        $_SESSION['user'] = $row['fName'];
        $_SESSION['ID'] = $row['customerID'];
        $_SESSION['role'] = 0;
      }else{
          $_SESSION['logError'] = 'disabled';
      }
    }else{
        $_SESSION['logError'] = 'wrong';
    }
  }
  $log = 'INSERT INTO loginlog (username, error, time) VALUES ("'.$_POST['user'].'", "'.$_SESSION['logError'].'", CURRENT_TIMESTAMP)';
  $mysqli->query($log);
}
if(isset($_POST["logOut"])){
  session_unset();
}

header('Location:login.php');
?>
