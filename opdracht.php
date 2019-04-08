<!DOCTYPE html>
<html>
<head>

<meta http-equiv="refresh" content="0.9">
    <title> TIME </title>
    <link rel="stylesheet" href="opdracht.css">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
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
        }elseif ($hour >= "18" && $hour < "00") {
            echo '<body class="avond">';
           $dagdeel = 'avond';
        }elseif ($hour >= "00" && $hour < "6") {
            echo '<body class="night">';
           $dagdeel = 'night';
        }
        echo '<h1>','Goede ',$dagdeel,'!','</h1>';
        echo '<h1>','Het is nu ',$hour,":",$minute,'</h1>'; 
    ?>
</body>
</html>