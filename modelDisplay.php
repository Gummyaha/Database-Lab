<!DOCTYPE html>
<!--  -->
<html>
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="model.css"/>
  <head>
    <title> THE CAR </title>
    <?php


     ?>
  </head>

  <header>
<!--MENU Bar-->
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
    <div class="header-title-Models">
      <img style="float: left; width:40%"; src="Models-Header.png">
    </div>

    <!--table formulation starts here -->
    <div class="productContainer">
      <table class = "product">
        <tr>
          <td class = "picture">
            <img src="img_News1.png" style="float: left; padding-top: 2%">
          </td>
          <td class = "details">

            <ul class = "desc" style="list-style-type: none;">
              <li><h1 class ="name">Model X</h1><br></li>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt mi non lorem porta tempus. Proin velit urna, vulputate sit amet porttitor eu, maximus in eros. Nullam mattis leo ac erat cursus, eu iaculis tortor laoreet. Phasellus non dapibus ex, quis varius sapien. Proin rutrum diam et volutpat efficitur. Quisque et facilisis lectus. Phasellus sit amet volutpat nisi. Nulla viverra ultrices pretium. Quisque laoreet ligula placerat, congue nisl quis, vehicula elit. Nullam fermentum ligula at suscipit gravida. Nulla eget nibh mauris.</li><br>
              <li><button class = "button" style = "width: 50%;">  Buy </button></li>
            </ul>
          </td>
        </td>
        </tr>
      </table>
    </div>




  </body>
</html>
