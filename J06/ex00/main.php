<?php

include "Color.class.php";
$array = array('re' => '200', 'green' => '-200', 'blue' => '55');
$array2 = array('rg' => '2B1A0C');

Color::set_verbose(1);
$instance = new Color($array);
Color::set_verbose(0);
$instance2 = new Color($array2);
echo $instance."\n----\n";
echo $instance2."\n----\n";

?>
