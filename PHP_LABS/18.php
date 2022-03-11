<?php

function sumHigher10($a, $b) { return ($a + $b > 10) ? true : false; }
function areEqual($a, $b) { return $a == $b ? true : false; }

function sum($num)
{
	if ($num < 0)
    	$num = abs($num);
        
	$sum = 0;
    
	while ($num != 0)
    {
    	$sum += $num % 10;
        $num = ($num - ($num % 10)) / 10;
    }
    
    return $sum;
}

$test = 0;

if (!$test)
	echo "верно";
    
echo "\n";
    
$age = 19;

if ($age < 10 || $age > 99)
	echo "Возраст < 10 или > 99";
else
	echo sum($age) <= 9 ? "Сумма однозначна" : "Сумма цифр двузначна";

echo "\n";

$arr = [1, 2, 3];

if (count($arr) == 3)
	echo array_sum($arr);