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
	if (!valid_login($_POST['login']))
		echo "<div style=\"width:60%\" class=\"red_block\">Erreur ! Le nom du poney doit faire 5 caractères minimum et ne doit contenir que des lettres et/ou des chiffres !</div>";
	else if (login_already_used($_POST['login']))
		echo "<div style=\"width:20%\" class=\"red_block\">Ce nom de poney est déjà utilisé !</div>";
	else if (!valid_passwd($_POST['passwd']))
		echo "<div style=\"width:82%\" class=\"red_block\">Erreur ! Le secret du poney doit faire 8 caractéres minimum, il doit contenir au minimum une minuscule, une majuscule, un chiffre et un caractère spécial !</div>";
	else
	{
		create_user($_POST['login'], $_POST['passwd'], 0);
		echo "<div style=\"width:35%\" class=\"green_block\">Bravo ! Votre poney vient officiellement d'entrer dans l'écurie !</div>";
	}
	 ?>
 </br>
 <a href="index.php"><input class="ret_index" type="button" value="Retour à l'écurie"/></a>
 <a href="panier.php"><input class="ret_index" type="button" value="Retour au panier"/></a>
	<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</body>
</html>
