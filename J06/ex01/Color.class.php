<?php

class	Color
{

	public static $verbose = FALSE;
	public $red = 0;
	public $green = 0;
	public $blue = 0;

	public function	get_red()
	{
		return $this->red;
	}

	public function	get_green()
	{
		return $this->green;
	}

	public function	get_blue()
	{
		return $this->blue;
	}

	public static function get_verbose()
	{
		return ((self::$verbose) ? TRUE : FALSE);
	}

	public static function	set_verbose($val)
	{
		self::$verbose = ($val) ? TRUE : FALSE;
	}

	public function	set_red($val)
	{
		$this->red = $val;
	}

	public function	set_green($val)
	{
		$this->green = $val;
	}

	public function	set_blue($val)
	{
		$this->blue = $val;
	}

	public	function __construct(array $kwargs)
	{
		if (array_key_exists('rgb', $kwargs))
		{
			if (strlen($kwargs['rgb']) == 6)
			{
				$r = $kwargs['rgb'][0].$kwargs['rgb'][1];
				$g = $kwargs['rgb'][2].$kwargs['rgb'][3];
				$b = $kwargs['rgb'][4].$kwargs['rgb'][5];
				$this->set_red(hexdec($r));
				$this->set_green(hexdec($g));
				$this->set_blue(hexdec($b));
			}
			else if (self::$verbose)
			{
				echo "RGB key bad formatted !\n";
				return ;
			}
		}
		else
		{
			if (array_key_exists('red', $kwargs))
				$this->red = intval($kwargs['red']);
			else
			{
				$this->red = 255;
				if (self::$verbose)
					echo "Missing RED key !\n";
			}
			if (array_key_exists('green', $kwargs))
				$this->green = intval($kwargs['green']);
			else
			{
				$this->green = 255;
				if (self::$verbose)
					echo "Missing GREEN key !\n";
			}
			if (array_key_exists('blue', $kwargs))
				$this->blue = intval($kwargs['blue']);
			else
			{
				$this->blue = 255;
				if (self::$verbose)
					echo "Missing BLUE key !\n";
			}
		}
		if (self::$verbose)
			echo "Object construct !\n";
	}

	public function	__destruct()
	{
		$this->red = 0;
		$this->green = 0;
		$this->blue = 0;
		if (self::$verbose)
			echo "Object destructed !\n";
	}

	public	function __toString()
	{
		return ("Red: ".$this->red."\nGreen: ".$this->green."\nBlue: ".$this->blue."\n");
	}

	public static function doc()
	{
		if (file_exists("Color.doc.txt"))
		{
			return (file_get_contents("Color.doc.txt"));
		}
	}

	public function add($obj)
	{
		if ($obj instanceof Color)
		{
			$r = $this->get_red() + $obj->get_red();
			$g = $this->get_green() + $obj->get_green();
			$b = $this->get_blue() + $obj->get_blue();
			$tab = array('red' => $r, 'green' => $g, 'blue' => $b);
			$next_color = new Color($tab);
			return ($next_color);
		}
		else if (self::$verbose)
		{
			echo "Fatal error !\n";
			return NULL;
		}
	}

	public function sub($obj)
	{
		if ($obj instanceof Color)
		{
			$r = $this->get_red() - $obj->get_red();
			$g = $this->get_green() - $obj->get_green();
			$b = $this->get_blue() - $obj->get_blue();
			$tab = array('red' => $r, 'green' => $g, 'blue' => $b);
			$next_color = new Color($tab);
			return ($next_color);
		}
		else if (self::$verbose)
		{
			echo "Fatal error !\n";
			return NULL;
		}
	}

	public function mult($fact)
	{
		if (is_int($fact))
		{
			$r = $this->get_red() * $fact;
			$g = $this->get_green() * $fact;
			$b = $this->get_blue() * $fact;
			$tab = array('red' => $r, 'green' => $g, 'blue' => $b);
			$next_color = new Color($tab);
			return ($next_color);
		}
		else if (self::$verbose)
		{
			echo "Fatal error !\n";
			return NULL;
		}
	}
}

 ?>
