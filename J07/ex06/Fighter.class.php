<?php
abstract class	Fighter
{
	private $_type;
	abstract public fight($target);

	public function	__construct($type)
	{
		$type = $this->$_type;
	}

	public function getType()
	{
		return ($this->_type);
	}
}
 ?>
