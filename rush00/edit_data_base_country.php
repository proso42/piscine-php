<?php
include "header.php";
include "fonctions.php";
?>
<div>
</br>
<?php
if ($_POST['new_country'] == $_POST['confirm_country'] && valid_country($_POST['new_country']))
{
	$data_base = unserialize(file_get_contents("private/users"));
	$i = 0;
	while ($data_base[$i]['login'] != $_SESSION['logged']['login'])
		$i++;
	$data_base[$i]['country'] = $_POST['new_country'];
	file_put_contents("private/users", serialize($data_base));
	echo "<div style=\"width:30%\" class=\"green_block\">Le pays du Poney a été correctement modifié !</div>";
}
else if ($_POST['new_country'] != $_POST['confirm_country'])
	echo "<div style=\"width:20%\" class=\"red_block\">Le pays a été mal confirmé !</div>";
else
	echo "<div style=\"width:40%\" class=\"red_block\">Erreur ! Le pays du Poney ne peut contenir que des lettres</div>";
?>
</br>
<a href="index.php"><input class="ret_index" type="button" value="Retour à l'écurie"/></a>
<a href="account.php"><input class="ret_index" type="button" value="Retour au compte"/></a>
<a href="panier.php"><input class="ret_index" type="button" value="Retour au panier"/></a>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
