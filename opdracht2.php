<!doctype html>

<html lang="nl">
<head>
  <meta charset="utf-8">

  <title>Eind opdracht</title>
  <meta name="description" content="Theus de Zeeuw">
  <meta name="author" content="SitePoint">
  <meta name=”viewport” content=”width=device-width, initial-scale=1.0″/>

  <link rel="stylesheet" href="opdracht1.css">
  <!-- <script src="js/scripts.js"></script> -->
</head>

<body>
  <?php
    date_default_timezone_set('Europe/Amsterdam');
    $hour = date("H");
    $minute = date("i");
    $seconds = date('s');
    if ($hour >= "6" && $hour < "12") {
        echo '<body class="morning">';
       $dagdeel = 'morning';
    }elseif ($hour >= "12" && $hour < "18") {
        echo '<body class="afternoon">';
       $dagdeel = 'afternoon';
    }elseif ($hour >= "18" && $hour < "00") {
        echo '<body class="evening">';
       $dagdeel = 'evening';
    }elseif ($hour >= "00" && $hour < "6") {
        echo '<body class="night">';
       $dagdeel = 'night';
    }
    include 'menu.php';
    echo '<h1>Welkome</h1>';
    echo '<h2>To this side</h2>';
  ?>
</body>
</html>