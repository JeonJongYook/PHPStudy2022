<?php
    function oneToHundred($a)
    {
        $sum = 0;
        while ($sum <= 5000)
        {
            $sum=$sum+$a;
            $a++;
        }
        return $sum;
    }
    $total=oneToHundred($from=1,$to=100);
    echo "$from 에서 $to 까지의 합 : $total";
?>