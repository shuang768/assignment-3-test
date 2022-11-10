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
    <link rel="stylesheet" href="index.css">
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
    <form action="handler.php" method=post>
      <input type="radio" id="large" name="pizza_size" value="large">
      <label for="large">large $6.00</label><br>
      <input type="radio" id="extra_large" name="pizza_size" value="extra_large">
      <label for="extra_large">extra large $10.00</label><br>
      <input type="radio" id="cancel_order" name="Pizza_size" value="cancel_order">
      <label for="cancel_order">cancel order</label><br><br>
      <input type="submit" value="Submit">
    </form>