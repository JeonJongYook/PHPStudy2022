<?php
    $regis_num = "990116-1234567";
    sscanf($regis_num, "%6d-%7d", $a, $b);
    echo $a."<br/>";
    echo $b."<br/>";
    $data = "124 456 789";
    $dates = explode(" ", $data);
    for($c = 0; $c < 3; $c++)
    {
        echo $dates[$c]."<br/>";
    }
    $comma_dates = implode(",", $dates);
    echo $comma_dates."<br />";
?>