<?php
class	Jaime extends	Lannister
{
	public function	sleepWith($partner)
	{
		if (!($partner instanceof Lannister))
			echo "Let's do this." . PHP_EOL;
		else if ($partner instanceof Cersei)
			echo "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL;
		else
			echo "Not even if I'm drunk !" . PHP_EOL;
	}
}
 ?>
