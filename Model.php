<?php
  session_start();
  require_once('connect.php');
 ?>

<html>

<link rel="stylesheet" href="Model2.css"/>

  <head>
    <title> THE CAR : Models </title>
  </head>

  <header>
    <?php
    require_once('menu.php');
    ?>
  </header>
<?php
if(isset($_GET['model'])){
  $q='SELECT * FROM product,brands where manufacturer = brandID and productID = '.$_GET['model'];
  $results = $mysqli-> query($q);
  $row = $results->fetch_array();
}
 ?>
  <body>
    <div class="Name-Head" style="margin: 10% 15% 5% 10%;">
      <h1>  <?php
      if(isset($row)){
        echo 'The '.$row['name'];
      }else{
        echo 'Choose a Model';
      }

      ?> </h1>
    </div>

<br>

<h3 style="margin: 0% 5% 1% 10%" >Properties</h3>
    <table style="margin: 0% 5% 2% 10%">
      <tr>
        <td class="head">Length</td>
        <td class="detail">
          <?php
          if(isset($row)){
            echo $row['length'].' ';
          }else{
              echo "-";
          }
          ?>
           mm</td>
           <?php
           if(isset($row)){

            $image = 'car-img/'.$row['productID'].'_1.jpg';
            if(!file_exists($image)){
              $image = 'car-img/default.jpg';
            }
          }
           ?>
        <td class="right-hand" rowspan="6"><img class = "carImage" src="<?php echo $image;  ?>"></td>
      </tr>
      <tr>
        <td class="head">Width</td>
        <td class="detail">
          <?php
          if(isset($row)){
            echo $row['width'].' ';
          }else{
              echo "-";
          }
          ?>
            mm</td>
      </tr>
      <tr>
        <td class="head">Height</td>
        <td class="detail">
          <?php
          if(isset($row)){
            echo $row['height'].' ';
          }else{
              echo "-";
          }
          ?>
            mm</td>
      </tr>
      <tr>
        <td class="head">Max speed</td>
        <td class="detail">
          <?php
          if(isset($row)){
            echo $row['maxSpeed'].' ';
          }else{
              echo "-";
          }
          ?>
            km/h </td>
      </tr>
      <tr>
        <td class="head">Acceleration (0 to 60)</td>
        <td class="detail">
          <?php
          if(isset($row)){
            echo $row['acceleration'].' ';
          }else{
              echo "-";
          }
          ?>
            Seconds</td>

      </tr>
      <tr>
        <td class="head">Manufacturer</td>
        <td class="detail">
          <?php
          if(isset($row)){
            echo $row['brandName'].' ';
          }else{
              echo "-";
          }
          ?>
            </td>
      </tr>

    </table>


    <p style="margin-left: 10%;">Price: <?php
    if(isset($row)){
      echo $row['price'].' ';
    }else{
        echo "-";
    }
    ?> Baht</p>
    <br>

    <center>
      <button class="button">Test Drive</button>
      <br>
      <br>
      <br>

      <h3>COMMENT</h3>
      <form action='comment.php' method='post'>
        <input type="hidden" name = 'model' value = '<?php  echo $_GET['model']?>'>
      <textarea id = "comment" name="comment" style="color: #7c7c7c; margin:0% 0% 3% 0%;" rows="6" cols="50" maxlength = "200" placeholder="Comment here"></textarea>
      <br>
      <input type="submit" class="button" style="margin:0% 0% 0% 20%;" value = 'Comment'></input>
    </form>
      </center>
  <?php
  if(isset($_GET['model'])){
    $q = 'SELECT CONCAT(fName, " ", lName) as name, text, dateTime FROM comments,customer WHERE productID = '.$_GET['model'].' and customer.customerID =comments.customerID ORDER BY dateTime DESC';
    $results = $mysqli->query($q);
    while($row = $results->fetch_array()){
      echo '<br>';
      echo '<hr style="margin-top: 3%; border-top: 1px solid #f2f2f2; ">';
      echo '<h2 style="margin: 1% 0% 2% 25%; color: #333333;">'.$row['name'].'<span style="font-size: 14px;"> : '.$row['dateTime'].'</span></h2>';
      echo '<p> <span style="margin: 1% 0% 2% 30%; color: grey;">'.$row['text'].'</span> </p>';
      echo ' <hr style="margin-top: 2%; border-top: 1px solid #f2f2f2;">;
      <br>';
    }

  }
?>

  </body>

</html>
