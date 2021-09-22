<?php
$arr=[1,4,8,9,2,5,7,-1, -7, 17];
$n=count($arr);
$target=10;
    for ($i = 0; $i < $n - 1; ++$i) {
        for ($j = $i + 1; $j < $n; ++$j) {
            if ($arr[$i] + $arr[$j] == $target) {
                echo 'Pair found'.' - '.'('."$arr[$i]".','."$arr[$j]".')'."\n";
            }
        }
    }
?>