<html>

<head>
  <title> User Table</title>
</head>

<body>
  <h1 style = "margin: 5% 0% 5% 10%"> User Table </h1>

<center>
  <table class="usertable" style="border-collapse: collapse; width: 60%;">
    <tr style = "background-color:#f2f2f2;" >
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Product Name</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Manufacturer</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Description</th>

      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Price</th>
    </tr>

    <tr>
      <?php
      if(isset($_POST["prodName"])){
      echo '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">'. $_POST["prodName"].'</td>';
      echo '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">'. $_POST["manu"].'</td>';
      echo '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">'. $_POST["desc"].'</td>';
      echo '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">'. $_POST["price"].'</td>';
}

      ?>

    </tr>
  <table>

<br>
<br>
      <a href="admin.html"><button class="button" style= "padding: .5% 2% .5% 2%;">BACK</button></a>


</center>

</body>
</html>
