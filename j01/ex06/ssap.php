#!/usr/bin/php
<?php
if ($argc == 1)
	return(0);
unset($argv[0]);
$array = array_filter(explode(" ", implode(" ",$argv)));
sort($array);
foreach ($array as $elem) 
	echo "$elem\n";
?>