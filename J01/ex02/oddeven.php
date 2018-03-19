#!/usr/bin/php
<?php
	while (1)
	{
		print("Entrez un nombre: ");
		$reponse=trim(fgets(STDIN));
		if (feof(STDIN))
		{
			print("^D\n");
			exit;
		}
		if (!(is_numeric($reponse)))
			print("'$reponse' n'est pas un chiffre\n");
		else if ($reponse % 2)
			print("Le chiffre $reponse est Impair\n");
		else
			print("Le chiffre $reponse est Pair\n");
	}
?>
