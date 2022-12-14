<!DOCTYPE HTML>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="description" content="My first php page" />
    <meta name="keywords" content="ics2o" />
    <meta name="author" content="shuang xia" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="manifest" href="./site.webmanifest">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>pizza ordering</title>
  </head>

  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">pizza order</span>
        </div>
      </header>
      
        <main class="mdl-layout__content" style="margin-left:75px;">
      <p text>Choose your pizza size</p>
      <form  action="handler.php" method=post>
      <input type="radio" id="large" name="pizza_size" value="6.00" required>
      <label for="large">large $6.00</label><br>
      <input type="radio" id="extra_large" name="pizza_size" value="10.00">
      <label for="extra_large">extra large $10.00</label><br>
      <input type="radio" id="cancel_order" name="pizza_size" value="0">
      <label for="cancel_order">cancel order</label><br>
      <p text>Choose your pizza toppings</p>
      <input type="radio" id="1t" name="toppings" value="1.00" required>
      <label for="1t">1 toppings $1.00</label><br>
      <input type="radio" id="2t" name="toppings" value="1.75">
      <label for="2t">2 toppings $1.75</label><br>
      <input type="radio" id="3t" name="toppings" value="2.50">
      <label for="3t">3 toppings $2.50</label><br>
      <input type="radio" id="4t" name="toppings" value="3.25">
      <label for="4t">4 toppings $3.25</label><br>
      <input type="radio" id="0t" name="toppings" value="0">
      <label for="0t">cancel order</label><br><br>
      <?php
        if (isset($_GET) && $_GET['error'] == 1) {
            echo "<p class=\"variablecolour\">please choose one</p>";
          }
          ?>
      <input type="submit" value="Submit">
      </form>
      
        
          
  