<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order = $order . " NEW LINE!";

echo "\nYour order is: $very_bad_unclear_name.";