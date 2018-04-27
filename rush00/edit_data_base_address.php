<?php
include "header.php";
include "fonctions.php";
?>
<div>
</br>
<?php
if ($_POST['new_address'] == $_POST['confirm_address'] && valid_address($_POST['new_address']))
{
	$data_base = unserialize(file_get_contents("private/users"));
	$i = 0;
	while ($data_base[$i]['login'] != $_SESSION['logged']['login'])
		$i++;
	$data_base[$i]['address'] = $_POST['new_address'];
	file_put_contents("private/users", serialize($data_base));
	echo "<div style=\"width:30%\" class=\"green_block\">L'adresse du Poney a été correctement modifié !</div>";
}
else if ($_POST['new_country'] != $_POST['confirm_country'])
	echo "<div style=\"width:20%\" class=\"red_block\">L'adresse a été mal confirmé !</div>";
else
	echo "<div style=\"width:50%\" class=\"red_block\">Erreur ! L'adresse du Poney doit suivre cet exemple : numero de la voie, nom de la voie</div>";
?>
</br>
<a href="index.php"><input class="ret_index" type="button" value="Retour à l'écurie"/></a>
<a href="account.php"><input class="ret_index" type="button" value="Retour au compte"/></a>
<a href="panier.php"><input class="ret_index" type="button" value="Retour au panier"/></a>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
