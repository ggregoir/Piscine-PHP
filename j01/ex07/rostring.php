#!/usr/bin/php
<?php
$array = array_filter(explode(" ", $argv[1]));
$last = $array[0];
unset($array[0]);
foreach ($array as $elem) 
	echo "$elem ";
echo "$last\n";
?>