#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');
function get_month($mois)
{
	if (!strcmp("janvier",$mois[0]) || !strcmp("Janvier",$mois[0]))
		return (1);
	else if (!strcmp("fevrier",$mois[0]) || !strcmp("Fevrier",$mois[0]))
		return (2);
	else if (!strcmp("mars",$mois[0]) || !strcmp("Mars",$mois[0]))
		return (3);
	else if (!strcmp("avril",$mois[0]) || !strcmp("Avril",$mois[0]))
		return (4);
	else if (!strcmp("mai",$mois[0]) || !strcmp("Mai",$mois[0]))
		return (5);
	else if (!strcmp("juin",$mois[0]) || !strcmp("Juin",$mois[0]))
		return (6);
	else if (!strcmp("juillet",$mois[0]) || !strcmp("Juillet",$mois[0]))
		return (7);
	else if (!strcmp("aout",$mois[0]) || !strcmp("Aout",$mois[0]))
		return (8);
	else if (!strcmp("septembre",$mois[0]) || !strcmp("Septembre",$mois[0]))
		return (9);
	else if (!strcmp("octobre",$mois[0]) || !strcmp("Octobre",$mois[0]))
		return (10);
	else if (!strcmp("novembre",$mois[0]) || !strcmp("Novembre",$mois[0]))
		return (11);
	else
		return (12);
}
	if(!(preg_match("/(^[lL]undi|^[mM]ardi|^[mM]ercredi|^[jJ]eudi|^[vV]endredi|^[sS]amedi|^[dD]imanche) /", $argv[1])))
		print("Wrong Fromat 1\n");
	else if (!(preg_match("/[a-z] ([0-9]|[0-2][0-9]|[3][0-1]) /", $argv[1])))
		print("Wrong Fromat 2\n");
	else if (!(preg_match("/[a-z] ([0-9]{2}) ([jJ]anvier|[fF]evrier|[mM]ars|[aA]vril|[mM]ai|[jJ]uin|[jJ]uillet|[aA]out|[sS]eptembre|[oO]ctobre|[nN]ovembre|[dD]ecembre) /", $argv[1])))
		print("Wrong Fromat 3\n");
	else if (!(preg_match("/[a-z] ([0-9]{2}) ([A-Z]|[a-z])[a-z]+ [0-9]{4} ((([0-1][0-9])|2[0-3]):[0-5][0-9]:[0-5][0-9])$/", $argv[1])))
		print("Wrong Format 4\n");
	else
	{
		preg_match("/([0-9]$|[0-2][0-9]|[3][0-1])/", $argv[1], $number);
		preg_match("/([jJ]anvier|[fF]evrier|[mM]ars|[aA]vril|[mM]ai|[jJ]uin|[jJ]uillet|[aA]out|[sS]eptembre|[oO]ctobre|[nN]ovembre|[dD]ecembre)/", $argv[1], $mois);
		preg_match("/[0-9]{4}/", $argv[1], $annee);
		preg_match("/((([0-1][0-9])|2[0-3]):[0-5][0-9]:[0-5][0-9])/", $argv[1], $heure);
		$mois[0]=get_month($mois);
		$heure = explode(':', $heure[1]);
		$final = array();
		foreach ($heure as $key)
		{
			if ($key)
				array_push($final, $key);
		}
		echo mktime($final[0],$final[1],$final[2],$mois[0],$number[0],$annee[0]);
		echo "\n";
	}
?>
