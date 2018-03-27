#!/usr/bin/php
<?php
if ($argv[1] == 0)
	return(0);
$f = explode(" ", $argv[1]);
$f = array_filter($f);
$f = implode(" ", $f);
echo "$f\n";
?>