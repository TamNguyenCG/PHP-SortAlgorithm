<?php
$array = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];

echo "<pre>";
print_r($array);

echo "<pre>";
print_r(insertSort($array));


function insertSort($arr){
    $length = count($arr);
    for ($i = 0;$i < $length;$i++){
        $val = $arr[$i];
        $j = $i - 1;
        while($j >= 0 && $arr[$j] > $val) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1]=$val;
    }
    return $arr;
}