#!/usr/bin/php
<?php

	$tab = explode(' ', $argv[1]);
	$final = array();
	foreach ($tab as $key)
	{
		if ($key)
			array_push($final, $key);
	}
	print_r($final);
?>
