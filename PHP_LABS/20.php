<?php

// 1
$arr = [1, 2, 3, 4, 5];

echo array_sum($arr) / count($arr);
echo "\n";

// 2
echo array_sum(range(1, 100));
echo "\n";

// 3
$arr = [144, 25, 9, 4, 16];
$arr = array_map("sqrt", $arr);

// 4
$arr = array_combine(range('a', 'z'), range(1, 26));

// 5
$str = "1234567890";
$arr = str_split($str, 2);

echo array_sum($arr);