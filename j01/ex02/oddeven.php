#!/usr/bin/php
<?php
while(1)
{
	echo "Entrez un nombre: ";
	$f = trim(fgets(STDIN));
	if (feof(STDIN))
	{
		echo "\n";
		break;
	}
	if (is_numeric($f) == 0)
	{
		echo "'{$f}' n'est pas un chiffre\n";
	}
	else if ($f[strlen($f) - 1] % 2 == 0)
	{
		echo "Le chiffre $f est Pair\n";
	}
	else if($f[strlen($f) - 1] % 2 == 1)
	{
		echo "Le chiffre $f est Impair\n";
	}

	
}
?>