<?php

$arr = [7, 3, 2, 1, 23, 9, 11, 5, 13, 4];

function bubble_sort($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $flag = false;

        for ($j = 0; $j < count($arr) - 1 - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                list($arr[$j], $arr[$j + 1]) = [$arr[$j + 1], $arr[$j]];
                $flag = true;
            }
        }
        if (!$flag) return $arr;
    }
    return $arr;
}

var_dump(bubble_sort($arr));