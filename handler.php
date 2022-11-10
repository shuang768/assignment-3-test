<!DOCTYPE html>
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
        <?php
            if (isset($_POST['large'])){
          $m=$m+6.00;}
            elseif (isset($_POST['extra_large'])){
          $m=$m+10.00;}
            elseif (isset($_POST['order_cancelled'])){
          echo "order cancelled";}
             else { echo "<meta http-equiv=\"refresh\" content=\"0; url=https://test.shuang768.repl.co/\">";}?>
</html>