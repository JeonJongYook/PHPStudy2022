<?php
    for($a=1; $a < 7; $a++)
    {
        for($b=0; $b+$a-6; $b++)
//        for($b=0; $b<=5-$a; $b++)
        {
            echo "🤍";
        }
        for($c=0; $c-2 * $a; $c++)
//        for($c=0; $c<=$a*2-1; $c++)
        {
            echo "🖤";
        }
        echo "<br/>";
    }
?>