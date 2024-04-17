<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a Sphere, in PHP" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Nathan De Silva" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Volume of a Sphere, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a Sphere, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/sphere.png" alt="sphere" width="250" />
      </div>
      <div class="page-content-php">
        <div name="volume-of-sphere">
          <div class="mdl-layout__header-row">
            <br />
            <div class="mdl-layout__content">
            </div>
            <div class="mdl-layout__left">
              <?php

              // input
              $radius = $_POST["radius"];

              // process
              $volume = (4 / 3) * M_PI * pow($radius, 3);

              // output
              echo "If the radius is " . round($radius, 2) . ". ";
              echo "<br />";
              echo "<br />";
              echo "Then the Volume is: " . round($volume, 2) . " mm³";
              echo "<br />";

              ?>
            </div>
          </div>
        </div>
    </main>
  </div>
</body>

</html>
