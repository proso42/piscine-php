<?php
include "header.php";
include "fonctions.php";
?>
<div>
</br>
<?php
if ($_POST['new_phone'] == $_POST['confirm_phone'] && valid_phone($_POST['new_phone']))
{
	$data_base = unserialize(file_get_contents("private/users"));
	$i = 0;
	while ($data_base[$i]['login'] != $_SESSION['logged']['login'])
		$i++;
	$data_base[$i]['phone'] = $_POST['new_phone'];
	file_put_contents("private/users", serialize($data_base));
	echo "<div style=\"width:40%\" class=\"green_block\">Le numéro de téléphonne du Poney a été correctement modifié !</div>";
}
else if ($_POST['new_phone'] != $_POST['confirm_phone'])
	echo "<div style=\"width:30%\" class=\"red_block\">Le nouveau numéro de téléphonne a été mal confirmé !</div>";
else
	echo "<div style=\"width:60%\" class=\"red_block\">Erreur ! Le numéro de téléphonne du poney doit faire 10 caractéres, il doit contenir uniquement des chiffres</div>";
?>
</br>
<a href="index.php"><input class="ret_index" type="button" value="Retour à l'écurie"/></a>
<a href="account.php"><input class="ret_index" type="button" value="Retour au compte"/></a>
<a href="panier.php"><input class="ret_index" type="button" value="Retour au panier"/></a>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
