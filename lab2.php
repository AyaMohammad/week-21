<!doctype html>

<html lang="nl">
<head>
  <meta charset="utf-8">

  <title>Lab 2</title>
  <meta name="description" content="Aya Mohammad">
  <meta name="author" content="SitePoint">
  <meta name=”viewport” content=”width=device-width, initial-scale=1.0″/>
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

  <link rel="stylesheet" href="opdracht.css">

</head>


  <div class="container">
  
  <?php
  date_default_timezone_set('Europe/Amsterdam');
  $hour = date("H");
  $minute = date("i");
  $seconds = date('s');
  if ($hour >= "6" && $hour < "12") {
      echo '<body class="morning">';
     $dagdeel = 'morgen';
  }elseif ($hour >= "12" && $hour < "18") {
      echo '<body class="afternoon">';
     $dagdeel = 'middag';
  }elseif ($hour >= "18" && $hour < "00") {
      echo '<body class="evening">';
     $dagdeel = 'avond';
  }elseif ($hour >= "00" && $hour < "6") {
      echo '<body class="night">';
     $dagdeel = 'night';
  }
  
  $numbers = array(3,5,8,12); 
  foreach ($numbers as $value) {
    echo '<div class="tafel">';
      for($i=1; $i<=10; $i++){
          echo '<p>', $i,'x',$value,'=',($i*$value),'<br>','</p>';
      }
      echo '</div>';
  } 
  ?>
  
  </div>
</body>
</html>