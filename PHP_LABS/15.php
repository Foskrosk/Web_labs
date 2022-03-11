<?php

function printStringReturnNumber()
{
	echo "func";
    return 7;
}

$my_num = printStringReturnNumber();

echo "\n";
echo $my_num;