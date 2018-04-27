<?php
include "Vertex.class.php";
include "Color.class.php";

class	Vector{

	private $_x;
	private $_y;
	private $_z;
	private $_w;
	private $_normalized = FALSE;
	public static $verbose = FALSE;

	private function	get_x()
	{
		return ($this->$_x);
	}

	private function	get_y()
	{
		return ($this->$_y);
	}

	private function	get_z()
	{
		return ($this->$_z);
	}

	private function	get_w()
	{
		return ($this->$_w);
	}

	public function	get_verbose()
	{
		return (self::$verbose);
	}

	public function	set_verbose($val)
	{
		self::$verbose = ($val) ? TRUE : FALSE;
	}

	public function	doc()
	{
		if (file_exists("Vector.doc.txt"))
			return (file_get_contents("Vector.doc.txt"));
		else if (self::$verbose)
			return ("Error: Vector.doc.txt does not exists !\n");
	}

	public function	__toString()
	{
		echo "x : " . $this->get_x() . "\ny : " . $this->get_y() . "\nz : " . $this->get_z() . "\nw : " . $this->get_w() . "\n";
	}

	public function	__construct(array $kwargs)
	{
		if (!array_key_exists('orig', $kwargs) || !($kwargs['orig'] instanceof Vertex))
		{
			$orig = new Vertex(array('x' => 0, 'y' => 0, 'z' => 0));
			$this->_x = $kwargs['dest']->get_x() - $orig->get_x();
			$this->_y = $kwargs['dest']->get_y() - $orig->get_y();
			$this->_z = $kwargs['dest']->get_z() - $orig->get_z();
		}
		else
		{
			$this->_x = $kwargs['dest']->get_x() - $kwargs['orig']->get_x();
			$this->_y = $kwargs['dest']->get_y() - $kwargs['orig']->get_y();
			$this->_z = $kwargs['dest']->get_z() - $kwargs['orig']->get_z();
		}
		$this->_w = 0.0;
		if (self::$verbose)
			echo "Vector constructed !\n";
	}

	public function __destruct()
	{
		$this->$_x = 0;
		$this->$_y = 0;
		$this->$_z = 0;
		$this->$_w = 0;
		if (self::$verbose)
			echo "Vector destructed !\n";
	}

	public function magnitude()
	{
		return (sqrt(pow($this->get_x(), 2) + pow($this->get_y(), 2) + pow($this->get_z(), 2)));
	}

	public function	normalize()
	{
		if ($this->normalized == FALSE)
		{
			$nx = $_x / sqrt((pow($_x, 2) + pow($_y, 2) + pow($_z, 2)));
			$ny = $_y / sqrt((pow($_x, 2) + pow($_y, 2) + pow($_z, 2)));
			$nz = $_z / sqrt((pow($_x, 2) + pow($_y, 2) + pow($_z, 2)));
			$new_vector = new Vector(array('x' => $nx, 'y' => $ny, 'z' => $nz));
		}
		else
			return (clone $this);
	}

	public function	add(Vector $rhs)
	{
		$new_vector = new Vector(array('x' => $this->get_x() + $rhs->get_x(), 'y' => $this->get_y() + $rhs->get_y(), 'z' => $this->get_z() + $rhs->get_z()));
	}

	public function	sub(Vector $rhs)
	{
		$new_vector = new Vector(array('x' => $this->get_x() - $rhs->get_x(), 'y' => $this->get_y() - $rhs->get_y(), 'z' => $this->get_z() - $rhs->get_z()));
	}

	public function	opposite()
	{
		$new_vector = new Vector(array('x' => $this->get_x() * -1, 'y' => $this->get_y() * -1, 'z' => $this->get_z() * -1));
	}

	public function	scalarProduct($k)
	{
		$new_vector = new Vector(array('x' => $this->get_x() * k, 'y' => $this->get_y() * k, 'z' => $this->get_z() * k));
	}

	public function	dotProduct(Vector $rhs)
	{
		$new_vector = new Vector(array('x' => $this->get_x() * $rhs->get_x(), 'y' => $this->get_y() * $rhs->get_y(), 'z' => $this->get_z() * $rhs->get_z()));
	}
}
 ?>
