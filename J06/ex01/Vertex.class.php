<?php

include "Color.class.php";

class	Vertex{
	private $_x;
	private $_y;
	private $_z;
	private $_w;
	private $_color;
	public static $verbose = FALSE;

	public function	get_x()
	{
		return ($this->_x);
	}
	public function	get_y()
	{
		return ($this->_y);
	}
	public function	get_z()
	{
		return ($this->_z);
	}
	public function	get_w()
	{
		return ($this->_w);
	}
	public function	get_color()
	{
		return ($this->_color);
	}
	public function	get_verbose()
	{
		return ((self::$verbose) ? TRUE : FALSE);
	}

	public function set_x($val)
	{
		$this->_x = $val;
	}
	public function set_y($val)
	{
		$this->_y = $val;
	}
	public function set_z($val)
	{
		$this->_z = $val;
	}
	public function set_w($val)
	{
		if (is_float($val))
			$this->_w = $val;
		else if (self::$verbose)
			echo $val . " is not a float !\nCannot set w attribute !\n";
	}
	public function set_color($val)
	{
		if ($val instanceof Color)
			$this->_color = $val;
		else if (self::$verbose)
			echo $val . " is not an instance of Color class !\nCannot set color attribute !\n";
	}

	public function	set_verbose($val)
	{
		self::$verbose = ($val) ? TRUE : FALSE;
	}

	public function __construct(array $kwargs)
	{
		$this->_x = intval($kwargs['x']);
		$this->_y = intval($kwargs['y']);
		$this->_z = intval($kwargs['z']);
		if (array_key_exists('w', $kwargs) && is_float($kwargs['w']))
			$this->_w = $kwargs['w'];
		else
		{
			$this->_w = 1.0;
			if (self::$verbose)
				echo "w attribute set to 1.0";
		}
		if (array_key_exists('color', $kwargs) && $kwargs['color'] instanceof Color)
			$this->_color = $kwargs['color'];
		else
		{
			$this->_color = new Color(array('rgb' => 'ffffff'));
			if (self::$verbose)
				echo "color attribute set to 0xFFFFFF";
		}
		if (self::$verbose)
			echo "Object constructed !\n";
	}

	public function	__destruct()
	{
		$this->_x = 0;
		$this->_y = 0;
		$this->_z = 0;
		$this->_w = 0.0;
		$this->_color = NULL;
		if (self::$verbose)
			echo "Object destructed !\n";
	}

	public function __toString()
	{
		if (self::$verbose)
			return ("x : ". $this->_x . "\ny : " . $this->_y . "\nz : " . $this->_z . "\nw : " . $this->_w . "\ncolor : \n{\n" . $this->_color->__toString() . "}\n");
		return ("x : " . $this->_x . "\ny : " . $this->_y . "\nz : " . $this->_z . "\nw : " . $this->_w . "\n");
	}

	public function doc()
	{
		if (file_exists("Vertex.doc.txt"))
			return (file_get_contents("Vertex.doc.txt"));
		else if (self::$verbose)
			return ("Vertex.doc.txt does not exist !\n");
		return (NULL);
	}
}
?>
