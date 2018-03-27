#!/usr/bin/php
<?php

function	sort_and_print($array)
{
	$len = count($array);
	$i = 1;
	while ($i < $len)
	{
		if (strcmp(strtolower($array[$i - 1]), strtolower($array[$i])) > 0)
		{
			$tmp = $array[$i - 1];
			$array[$i - 1] = $array[$i];
			$array[$i] = $tmp;
			$i = 0;
		}
		$i++;
	}
	foreach($array as $elem)
		echo "$elem\n";
}

if ($argc == 1)
	return (1);
unset($argv[0]);
$array = array_filter(explode(" ", implode(" ", $argv)));
$num = array();
$alpha = array();
$other = array();
foreach ($array as $elem)
{
	if (is_numeric($elem))
		array_push($num, $elem);
	else if (ctype_alpha($elem))
		array_push($alpha, $elem);
	else
		array_push($other, $elem);
}
sort_and_print($alpha);
sort_and_print($num);
sort_and_print($other);
?>