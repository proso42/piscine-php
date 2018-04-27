<?php
class	UnholyFactory
{
	private	$_footSoldierAbsorbed = FALSE;
	private	$_archerAbsorbed = FALSE;
	private	$_assassinAbsorbed = FALSE;

	public function	absorb($dude)
	{
		if ($dude instanceof Figther && $dude->getType() == "foot soldier")
		{
			$_footSoldierAbsorbed = TRUE;
			if (!$_footSoldierAbsorbed)
				echo "(Factory absorbed a fighter of type foot soldier)";
			else
				echo "(Factory already absorbed a fighter of type foot soldier)";
		}
		else if ($dude instanceof Figther && $dude->getType() == "archer")
		{
			$_archerAbsorbed = TRUE;
			if (!$_archerAbsorbed)
				echo "(Factory absorbed a fighter of type archer)";
			else
				echo "(Factory already absorbed a fighter of type archer)";
		}
		else if ($dude instanceof Figther && $dude->getType() == "assasin")
		{
			$_assasinAbsorbed = TRUE;
			if (!$_assasinAbsorbed)
				echo "(Factory absorbed a fighter of type assasin)";
			else
				echo "(Factory already absorbed a fighter of type assasin)";
		}
		else
			echo "(Factory can't absorb this, it's not a fighter)";
	}

	public function	fabricate($)
	{

	}
}
 ?>
