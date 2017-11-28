<?php
  require_once('connect.php');
  if(isset($_POST['email'])){
  $q = 'INSERT INTO newsletter (email) values("'.$_POST['email'].'")';
  if($mysqli->query($q)){
    header('Location: index.php?m=sus#contact');
  }else{
    echo 'Registration Failed';
  }
}else{
  echo 'no email sent';

}

 ?>
