#!/usr/bin/php
<?php

	$tab = explode(' ', $argv[1]);
	$final = array();
	$last;
	foreach ($tab as $key)
	{
		if ($key)
			array_push($final, $key);
	}
	$last = $final[0];
	array_shift($final);
	array_push($final, $last);
	$str;
	foreach ($final as $key)
	{
		if ($str)
			$str = $str.' '.$key;
		else
			$str = $final[0];
	}
	if ($argv[1])
		print("$str\n");
?>
