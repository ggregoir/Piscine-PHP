<?php
function ft_is_sort($tab)
{
	$tmp = $tab;
	sort($tmp);
	foreach($tab as $key => $value)
	    if($value != $tmp[$key])
	        return(0);
	return(1);
}
?>