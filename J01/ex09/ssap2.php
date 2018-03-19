#!/usr/bin/php
<?php

$tab = array();
$tmp = array();
$alpha = array();
$num = array();
$others = array();

foreach ($argv as $key)
{
	if ($key != $argv[0])
	{
		$tmp = explode(' ', $key);
		$tab = array_merge($tab, $tmp);
	}
}
foreach ($tab as $key)
{
	if (($key[0] >= 'A' && $key[0] <= 'Z') || ($key[0] >= 'a' && $key[0] <= 'z'))
		array_push($alpha, $key);
	else if (is_numeric($key[0]))
		array_push($num, $key);
	else
		array_push($others, $key);
}
arsort($num);
usort($alpha, "strcasecmp");
asort($others);
foreach ($alpha as $key)
{
	print("$key\n");
}
foreach ($num as $key)
{
	print("$key\n");
}
foreach ($others as $key)
{
	print("$key\n");
}
?>
