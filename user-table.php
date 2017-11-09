<html>

<head>
  <title> User Table</title>
</head>

<body>
  <h1 style = "margin: 5% 0% 5% 10%"> User Table </h1>

<center>
  <table class="usertable" style="border-collapse: collapse; width: 60%;">
    <tr style = "background-color:#f2f2f2;" >
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">First Name</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Last Name</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Username</th>

      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Address</th>
      <th style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">Email</th>
    </tr>

    <tr>
      <?php
      if(isset($_POST["fname"])){
      echo '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">'. $_POST["fname"].'</td>';
      echo '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">'. $_POST["lname"].'</td>';
      echo '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">'. $_POST["user"].'</td>';
      echo '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">'. $_POST["address"].'</td>';
      echo '<td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; font-size: 20px;">'. $_POST["email"].'</td>';
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
