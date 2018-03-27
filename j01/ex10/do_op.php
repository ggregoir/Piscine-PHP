#!/usr/bin/php
<?php
if ($argc != 4)
{
	echo "Incorrect Parameters\n";
	return(0);
}
if (trim($argv[2]) == "+")
	$res = $argv[1] + $argv[3];
else if (trim($argv[2]) == "-")
	$res = $argv[1] - $argv[3];
else if (trim($argv[2]) == "/")
	$res = $argv[1] / $argv[3];
else if (trim($argv[2]) == "*")
	$res = $argv[1] * $argv[3];
else if (trim($argv[2]) == "%")
	$res = $argv[1] % $argv[3];
echo "$res\n";
?>