<!DOCTYPE html>
<html>
<head>

<meta http-equiv="refresh" content="0.9">
    <title>TIME</title>
    <link rel="stylesheet" href="opdracht1.css">
</head>
<body>
<?php include 'menu.php'; ?>
    <?php
        date_default_timezone_set('Europe/Amsterdam');
        $month = date("F");
        $day = date ("d");
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
        echo '<h1>','Good ',$dagdeel,'</h1>';
        echo '<h1>','The time is ',$hour,":",$minute,":",$seconds,' right now','</h1>';
        echo '<h1>',$month,' ',$day,'</h1>' 
    ?>
</body>
</html>