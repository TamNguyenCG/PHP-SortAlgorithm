<?php
$list = [1, 9, 4.5, 6.6, 5.7, -4.5];

echo "<pre>";
print_r($list);

echo "<pre>";
print_r(selectionSort($list));


function selectionSort($list)
{
    $length = count($list);
    for ($i = 0; $i < $length - 1; $i++) {
        $max = $i;
        for ($j = $i + 1; $j < $length; $j++) {
            if ($list[$j] > $list[$max]) {
                $max = $j;
            }
        }
        $temp = $list[$i];
        $list[$i] = $list[$max];
        $list[$max] = $temp;
    }
    return $list;
}

