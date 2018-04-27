<?php
include "header.php";
include "fonctions.php";
?>
<div>
</br>
<?php
if ($_POST['new_mail'] == $_POST['confirm_mail'] && valid_mail($_POST['new_mail']))
{
	$data_base = unserialize(file_get_contents("private/users"));
	$i = 0;
	while ($data_base[$i]['login'] != $_SESSION['logged']['login'])
		$i++;
	$data_base[$i]['mail'] = $_POST['new_mail'];
	file_put_contents("private/users", serialize($data_base));
	echo "<div style=\"width:30%\" class=\"green_block\">Le mail du Poney a été correctement modifié !</div>";
}
else if ($_POST['new_mail'] != $_POST['confirm_mail'])
	echo "<div style=\"width:20%\" class=\"red_block\">Le nouveau mail a été mal confirmé !</div>";
else
	echo "<div style=\"width:40%\" class=\"red_block\">Erreur ! Le mail du poney doit suivre cet exemple abc@boitemail.com</div>";
?>
</br>
<a href="index.php"><input class="ret_index" type="button" value="Retour à l'écurie"/></a>
<a href="account.php"><input class="ret_index" type="button" value="Retour au compte"/></a>
<a href="panier.php"><input class="ret_index" type="button" value="Retour au panier"/></a>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
