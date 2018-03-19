#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
	$i = 0;
	$prev;
	$sup = 1;
	$inf = 1;
	foreach ($tab as $key)
	{
		if ($key == $tab[0])
			$prev = $key;
		else if (strcmp($key, $prev) <= 0)
			$prev = $key;
		else
		{
			$sup = 0;
			break;
		}
	}
	foreach ($tab as $key)
	{
		if ($key == $tab[0])
			$prev = $key;
		else if (strcmp($key, $prev) >= 0)
			$prev = $key;
		else
		{
			$inf = 0;
			break;
		}
	}
	if (!$inf && !$sup)
		return (0);
	return (1);
}
?>
