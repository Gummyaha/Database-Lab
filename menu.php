<?php if(session_id() == '') {
  session_start();
}?>
<div class= "container">
  <nav class= "nav">
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="index.php#news">NEWS</a></li>
      <li><a href="Model1.php">MODELS</a></li>
      <li><a href="Booking.php">BOOKING</a></li>
      <li><a href="index.php#contact">NEWSLETTER</a></li>
      <li></li>
      <li></li>
      <li></li>
      <li><?php
      require_once('connect.php');


      if(isset($_SESSION["user"])){


        if($_SESSION["role"] == 2){
          echo '<a href="admin.php">'.$_SESSION["user"].'</a>';
        }else{
          echo '<a href="user.php">'.$_SESSION["user"].'</a>';
        }

      }else{

      }?>
      </a></li>
        <li><a href="login.php"><?php if(isset($_SESSION["user"])){
          echo "LOG OUT";
        }else{
          echo "LOG IN";
        }?>
        </a></li>

    </ul>
  </nav>
</div>
</header>
