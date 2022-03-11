<?php

// 1
$a = 10;
$b = 3;

$mod = $a % $b;

echo $mod == 0 ? "Делится" : "Делится с остатком " . $mod;
echo "\n";

// 2
$st = 2 ** 10;
echo $st;
echo "\n";

// 3
$kr = sqrt(245);
echo $kr;
echo "\n";

// 4
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;

foreach ($arr as $x)
	$sum += $x ** 2;
    
echo $sum;
echo "\n";

// 5
$sqr = sqrt(379);
echo round($sqr);
echo "\n";
echo round($sqr, 1);
echo "\n";
echo round($sqr, 2);
echo "\n";

$sqr = sqrt(587);
$res = ["floor" => floor($sqr), "ceil" => ceil($sqr)];

// 6
$arr = [4, -2, 5, 19, -130, 0, 10];
echo "Min: " . min($arr) . " Max: " . max($arr);
echo "\n";

// 7
echo rand(1, 100);
echo "\n";

$arr = [];

for ($i = 0; $i < 10; $i += 1)
	$arr[i] = rand(1, 100);
    
// 8
$a = -4;
$b = 5;

echo abs($a - $b);
echo "\n";

$arr = [1, 2, -1, -2, 3, -3];

foreach ($arr as &$x)
	$x = abs($x);
    
// 9
$num = 30;
$arr = [];

for ($i = 1; $i <= abs($num); $i += 1)
	if ($num % $i == 0)
    	$arr[] = $i;
        
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$res = 0;

for ($i = 0; $i < count($arr); $i += 1)
	if ($sum > 10)
   	{
    	$res = $i;
    	break;
    }
    else
		$sum += $arr[$i];
        
echo $res;
echo "\n";