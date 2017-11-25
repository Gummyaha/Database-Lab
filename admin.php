<!-- insert navigation bar here-->
<html>
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="model.css"/>
  <head>
    <title> ADMIN </title>
  </head>

  <body>

  <header>
<!--MENU Bar-->
    <?php
      require_once('menu.php');
     ?>
    </header>
    <center>
    <div class = "loginBox" style = "margin-top: 50px;">

    <table style="margin-left 50%;">
      <tr>
        <td>
          <form method="post" action="addUser.html" style = "border-style:hidden;">
              <button class= "button "type="submit">Add Users</button>
          </form>
        </td>
      </tr>
      <tr>
        <td>
          <form method="post" action="user-table.php" style = "border-style:hidden;">
              <button class= "button "type="submit">View Users</button>
          </form>

        </td>
      </tr>
      <tr>
        <td>
          <form method="post" action="addProduct.html" style = "border-style:hidden;">
              <button class= "button "type="submit">Add Product</button>
          </form>
        </td>
      </tr>
      <tr>
        <td>
          <form method="post" action="product-table.php" style = "border-style:hidden;">
              <button class= "button "type="submit">View Product</button>
          </form>
        </td>
      </tr>
    </table>
</div>
</center>
</body>
</html>
