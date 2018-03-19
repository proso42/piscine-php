#!/usr/bin/php
<?php

	$tab = array();
	$tmp = array();
	foreach ($argv as $key)
	{
		if ($key != $argv[0])
		{
			$tmp = explode(' ', $key);
			$tab = array_merge($tab, $tmp);
		}
	}
	$final = array();
	foreach ($tab as $key)
	{
		if ($key)
			array_push($final, $key);
	}
	asort($final);
	foreach ($final as $key)
	{
		print("$key\n");
	}
?>
