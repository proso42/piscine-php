<?php
class	NightsWatch
{
	private	$recruit_list = array();

	public function	recruit($noob)
	{
		$this->recruit_list[] = clone $noob;
	}

	public function	fight()
	{
		foreach ($this->recruit_list as $key)
		{
			if ($key instanceof IFighter)
				$key->fight();
		}
	}
}
 ?>
