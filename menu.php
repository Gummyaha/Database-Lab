<div class= "container">
  <nav class= "nav">
    <ul>
      <li><a href="index.php#home">HOME</a></li>
      <li><a href="index.php#news">NEWS</a></li>
      <li><a href="index.php#models">MODELS</a></li>
      <li><a href="index.php#contact">CONTACT US</a></li>
        <li></li>
        <li></li>
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
