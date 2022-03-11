<?php

function increaseEnthusiasm($str) { return $str . "!"; }
function repeatThreeTimes($str) { return $str . $str . $str; }
function cut ($str, $length = 10) { return substr($str, 0, $length); }

function recursion(&$array, $pos = 0)
{
	if ($pos > count($array) - 1)
    	return;
    
    echo $array[$pos];
    
    recursion($array, $pos + 1);
}

function sum_rec($num)
{
	if ($num < 0)
    	$num = abs($num);
        
	$sum = 0;
    
	while ($num != 0)
    {
    	$sum += $num % 10;
        $num = ($num - ($num % 10)) / 10;
    }
    
    if ($sum > 9)
    	return sum_rec($sum);
    else
    	return $sum;
}

echo increaseEnthusiasm("Func");
echo "\n";

echo repeatThreeTimes("Func");
echo "\n";

$str = "Func";

echo increaseEnthusiasm(repeatThreeTimes($str));
echo "\n";

echo cut("12312321", 3);
echo "\n";

$arr = [1, 2, 3, 4, 5, 6, 7];
recursion($arr);

echo "\n";

echo sum_rec(12441224);