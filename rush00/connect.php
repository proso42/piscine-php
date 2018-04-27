<?php session_start();
include "fonctions.php";
include "header.php";
?>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Sign Your Poney</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
	if ($tmp = (auth($_POST['login'], $_POST['passwd'])))
	{
		echo "<div style=\"width:15%\" class=\"green_block\">Poney correctement sellé !</div>";
		$_SESSION['logged'] = $tmp;
	}
	else
	{
		echo "<div style=\"width:25%\" class=\"red_block\">Le nom du Poney ou son secret est incorrect !</div>";
	}
	 ?>
 	</br>
	<a href="index.php"><input class="ret_index" type="button" value="Retour à l'écurie"/></a>
	<a href="account.php"><input class="ret_index" type="button" value="Retour au compte"/></a>
	<a href="panier.php"><input class="ret_index" type="button" value="Retour au panier"/></a>
	<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</body>
</html>
