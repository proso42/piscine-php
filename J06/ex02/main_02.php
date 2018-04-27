<?php
include "Color.class.php";
include "Vertex.class.php";

$instance = new Vertex(array('x' => 10, 'y' => 20, 'z' => 30, 'w' => 5.2));
echo $instance->doc();

 ?>
