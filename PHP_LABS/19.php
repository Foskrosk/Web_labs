<?php

function drawPyramid($num)
{
	if ($num < 1)
    	return;
        
    for ($i = 0; $i < $num; $i += 1)
  	{
    	for ($j = 0; $j <= $i; $j += 1)
        	echo "x";
            
        echo "\n";
    }
}

drawPyramid(20);