<!doctype html>

<html lang="nl">
<head>
  <meta charset="utf-8">

  <title>Eind opdracht</title>
  <meta name="description" content="Aya Mohammad">
  <meta name="author" content="SitePoint">
  <meta name=”viewport” content=”width=device-width, initial-scale=1.0″/>

  <link rel="stylesheet" href="opdracht.css">
  
</head>

<body>

  <?php

        date_default_timezone_set('Europe/Amsterdam');
        $hour = date("H");
        $minute = date("i");
        if ($hour >= "6" && $hour < "12") {
            echo '<body class="morgen">';
           $dagdeel = 'morgen';
        }elseif ($hour >= "12" && $hour < "18") {
            echo '<body class="middag">';
           $dagdeel = 'middag';
        }elseif ($hour >= "18" && $hour < "24") {
            echo '<body class="avond">';
           $dagdeel = 'avond';
        }elseif ($hour >= "00" && $hour < "6") {
            echo '<body class="night">';
           $dagdeel = 'night';
        }
        include 'menu.php';
        include 'footer.php';
        echo '<h2>This is the home page</h2>';
  ?>
</body>
</html>