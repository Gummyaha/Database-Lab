<?php session_start();?>
<html>

<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
  <title> THE CAR </title>
</head>

<header>
  <?php
  require_once('menu.php');
  ?>




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
              <a href="Model.php"><img src="Model-test111.png" style="width: 100%;"></a>
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
              <a href="Model.php"><img src="Model-test22.png" style="width: 100%;"></a>
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
              <a href="Model.php"><img src="Model-test33.png" style="width: 100%;"></a>
            </div>
          </div>
        </div>
      </td>
    </tr>
  </table>
  <a href="Model1.php"><button class="button">SEE MORE</button></a>
</center>




<!--Contact-->
<center>
  <div class="header-title-Contact" id="contact">
    <img src="newsletter.png">
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
  <br>
  <br>
  <i class="fa fa-map-marker"></i>Bangkok, Thailand<br><br>
  <i class="fa fa-phone"></i>Phone: 080 000 0000<br><br>
  <form>
    <label for="Email">Email</label><br>
    <input type="text" id="Email" name="Email" placeholder="Email"><br>
  </form>

<br>
  <button class="button-black" type="submit">Subscribe</button>
<br>

<img src="footer.png">
  </body>
</html>
