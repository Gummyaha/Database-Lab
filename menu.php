<div class= "container">
  <nav class= "nav">
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="index.php">NEWS</a></li>
      <li><a href="index.php">MODELS</a></li>
      <li><a href="Booking.php">BOOKING</a></li>
      <li><a href="index.php">CONTACT US</a></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
        <li><?php if(isset($_SESSION["user"])){
          echo "LOG OUT";
        }else{
          echo "LOG IN";
        }?>
        </a></li>

    </ul>
  </nav>
</div>
</header>
