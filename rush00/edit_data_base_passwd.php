<?php
include "header.php";
include "fonctions.php";
?>
<div>
</br>
<?php
$re_hash = hash("whirlpool", $_POST['old_passwd']);
if ($re_hash == $_SESSION['logged']['passwd'])
{
	if ($_POST['new_passwd'] == $_POST['confirm_passwd'] && valid_passwd($_POST['new_passwd']))
	{
		$new_passed = hash("whirlpool", $_POST['new_passwd']);
		$data_base = unserialize(file_get_contents("private/users"));
		$i = 0;
		while ($data_base[$i]['login'] != $_SESSION['logged']['login'])
			$i++;
		$data_base[$i]['passwd'] = $new_passed;
		file_put_contents("private/users", serialize($data_base));
		$_SESSION['logged']['passwd'] = $new_passed;
		echo "<div style=\"width:30%\" class=\"green_block\">Le secret du Poney a été correctement modifié !</div>";
	}
	else if ($_POST['new_passwd'] != $_POST['confirm_passwd'])
		echo "<div style=\"width:25%\" class=\"red_block\">Le nouveau secret a été mal confirmé !</div>";
	else
		echo "<div style=\"width:80%\" class=\"red_block\">Erreur ! Le secret du poney doit faire 8 caractéres minimum, il doit contenir au minimum une minuscule, une majuscule, un chiffre et un caractère spécial !</div>";

}
else
	echo "<div style=\"width:30%\" class=\"red_block\">L'ancien secret que vous avez indiqué est invalide !</div>";
?>
</br>
<a href="index.php"><input class="ret_index" type="button" value="Retour à l'écurie"/></a>
<a href="account.php"><input class="ret_index" type="button" value="Retour au compte"/></a>
<a href="panier.php"><input class="ret_index" type="button" value="Retour au panier"/></a>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
