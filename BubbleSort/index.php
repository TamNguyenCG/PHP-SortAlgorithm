<?php

$array = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];

echo "<pre>";
print_r($array);

echo "<pre>";
print_r(bubbleSort($array));

function bubbleSort($arr)
{
    $length = count($arr);
    for ($i = 0; $i < $length; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j + 1];
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}