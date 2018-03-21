#!/usr/bin/php
<?php
	$res;
	if ($argc != 4)
		print("Incorrect Parameters\n");
	else
	{
		trim($argv[1]);
		trim($argv[2]);
		trim($argv[3]);
		if ($argv[2] == '+')
			$res = $argv[1] + $argv[3];
		else if ($argv[2] == '-')
			$res = $argv[1] - $argv[3];
		else if ($argv[2] == '*')
			$res = $argv[1] * $argv[3];
		else if ($argv[2] == '/')
			$res = $argv[1] / $argv[3];
		else if ($argv[2] == '%')
			$res = $argv[1] % $argv[3];
		else
			print("Error\n");
		print("$res\n");
	}
?>
