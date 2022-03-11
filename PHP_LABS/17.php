<?php

function arraFill($char, $length)
{
	$arr = [];
    
    for ($i = 0; $i < $length; $i += 1)
    	$arr[$i] = $char;
        
    return $arr;
}

$arr = [[1, 2, 3], [4, 5], [6]];
$sum = 0;

foreach ($arr as $x)
	foreach ($x as $y)
    	$sum += $y;
        
echo $sum;
echo "\n";

$arr = [];
$counter = 0;

for ($i = 0; $i < 3; $i += 1)
{
	$arr[$i] = [];
    
    for ($j = 0; $j < 3; $j +=1)
      $arr[$i][$j] = $counter += 1;
}

$arr = [2, 5, 3, 9];
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);

echo $result;
echo "\n";

$user = ["name" => "John", "surname" => "Jones", "patronymic" => "James"];

echo $user["surname"] . " " . $user["name"] . " " . $user["patronymic"];
echo "\n";

$date = ["year" => date("Y"), "month" => date("m"), "day" => date("d")];

echo $date["year"] . "-" . $date["month"] . "-" . $date["day"];
echo "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];

echo count($arr);
echo "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];

echo $arr[count($arr) - 1];
echo "\n";

echo $arr[count($arr) - 2];
echo "\n";
