<?php
function ft_split($variable)
{
	$my_array = explode(" ", $variable);
	$my_array = array_filter($my_array);
	sort($my_array);
	return($my_array);
}
?>