<?php
  session_start();
?>
<html>

<link rel="stylesheet" href="main.css"/>
  <head>
    <title> THE CAR </title>
  </head>

  <header>
<!--MENU Bar-->
      <div class= "container">
        <nav class= "nav">
          <ul>
              <li><a href="#home">HOME</a></li>
              <li><a href="#news">NEWS</a></li>
              <li><a href="#models">MODELS</a></li>
              <li><a href="Booking.php">BOOKING</a></li>
              <li><a href="#contact">CONTACT US</a></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li><a href="login.php">
                <?php if(isset($_SESSION["user"])){
                  echo "LOG OUT";
                }else{
                  echo "LOG IN";
                }
                ?>
              </a></li>

          </ul>
        </nav>
      </div>
    </header>




  <body>


  <img src="Car2.png" id="home">

<!-- NEWS -->
    <div class="header-title-news" id="news">
      <img style="float: right; width:85%"; src="News-Header_fix.png">
    </div>

 <center>
    <table style="width:80%; position: center;">
      <tr>
        <td class="pol-col">
          <div class="polaroid">
            <a href="News.html"><img src="img_News11.png" class= "image" style="width:100%"></a>
            <a href="News.html">
              <div class= "middle"><a href="News.html">
                <div class="text">READ</div></a>
              </div>
            <div class="banner-container">
              <p> <b>MAZDA</b> promises evolution of RX-Vision 2017 concept Tokyo Motor Show </p>
            </div>
          </div>
        </td>
        <td class="pol-col">
          <div class="polaroid">
            <a href="News2.html"><img src="img_News1.png" class= "image" style="width:100%"></a>
            <a href="News2.html">
              <div class= "middle"><a href="News2.html">
                <div class="text"> READ</div></a>
              </div>
            <div class="banner-container">
              <p> 2019 Porsche Cayenne, 2018 Mercedes-Benz S-Class, Borgward Isabella concept </p>
            </div>
        </td>
        <td class="pol-col">
          <div class="polaroid">
            <a href="News3.html"><img src="img_News33.png" class= "image" style="width:100%"></a>
              <a href="News3.html">
              <div class= "middle"><a href="News3.html">
                <div class="text"> READ</div></a>
              </div>
            <div class="banner-container">
              <p>First production 2018 Dodge Challenger SRT Demon rolls off assembly line</p>
            </div>

        </td>
      </tr>
    </table>
</center>

<center>
  <button class="button">LOAD MORE</button>
</center>

<!-- MODELS -->
  <div class="header-title-Models" id="models">
    <img src="Models-Header.png" style="width:40%; float: left">
  </div>

<center>
  <table class="model-table">
    <tr>
      <td>
        <div class="polaroid">
          <div class="image">
            <div class="model-img">
              <a href="modelDisplay.php"><img src="Model-test111.png" style="width: 100%;"></a>
            </div>
          </div>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div class="polaroid">
          <div class="image">
            <div class="model-img">
              <a href="modelDisplay.php"><img src="Model-test22.png" style="width: 100%;"></a>
            </div>
          </div>
        </div>
      </td>
    </tr>

    <tr>
      <td>
        <div class="polaroid">
          <div class="image">
            <div class="model-img">
              <a href="modelDisplay.php"><img src="Model-test33.png" style="width: 100%;"></a>
            </div>
          </div>
        </div>
      </td>
    </tr>
  </table>
  <button class="button">SEE MORE</button>
</center>




<!--Contact-->
<center>
  <div class="header-title-Contact" id="contact">
    <img src="ContacUst-Header2.png">
  </div>
  <br>
  <br>
</center>

  <!-- Google Map-->
  <div id="googleMap" style="width:20%; height:350px; border-radius: 3px; float:left; margin: 0% 5% 3% 30%;"></div>

  <script>
    function myMap()
    {
      myCenter=new google.maps.LatLng(13.75398, 100.50144);
      var mapOptions= {
      center:myCenter,
      zoom:12, scrollwheel: false, draggable: false,
      mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);
      var marker = new google.maps.Marker({position: myCenter});
      marker.setMap(map);
    }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtppcpytNGMABs65egaPMz72ql-4YKD7I&callback=myMap"></script>
  <!--End Map-->

  <form>
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name" placeholder="Your Name"><br>
    <label for="Email">Email</label><br>
    <input type="text" id="Email" name="Email" placeholder="Email"><br>
    <label for="Message">Message</label><br>
    <input type="text" id="Message" name="Message" placeholder="Your Message"><br>
  </form>

<br>
  <button class="button-black" type="submit">SEND MESSAGE</button>
<br>
  <img src="social.png">

<img src="footer.png">
  </body>
</html>
