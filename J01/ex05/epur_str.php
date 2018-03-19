#!/usr/bin/php
<?php

	$tab = explode(' ', $argv[1]);
	$final = array();
	foreach ($tab as $key)
	{
		if ($key)
			array_push($final, $key);
	}
	$str;
	foreach ($final as $key)
	{
		if ($str)
			$str = $str.' '.$key;
		else
			$str = $final[0];
	}
	print("$str\n");
?>
