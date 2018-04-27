<?php
include "header.php";
include "fonctions.php";
?>
<div>
</br>
<?php
if ($_POST['new_city'] == $_POST['confirm_city'] && valid_city($_POST['new_city']))
{
	$data_base = unserialize(file_get_contents("private/users"));
	$i = 0;
	while ($data_base[$i]['login'] != $_SESSION['logged']['login'])
		$i++;
	$data_base[$i]['city'] = $_POST['new_city'];
	file_put_contents("private/users", serialize($data_base));
	echo "<div style=\"width:30%\" class=\"green_block\">La ville du Poney a été correctement modifié !</div>";
}
else if ($_POST['new_city'] != $_POST['confirm_city'])
	echo "<div style=\"width:20%\" class=\"red_block\">La nouvelle ville a été mal confirmé !</div>";
else
	echo "<div style=\"width:45%\" class=\"red_block\">Erreur ! La ville du poney ne peut contenir que des lettres et des espaces !</div>";
?>
</br>
<a href="index.php"><input class="ret_index" type="button" value="Retour à l'écurie"/></a>
<a href="account.php"><input class="ret_index" type="button" value="Retour au compte"/></a>
<a href="panier.php"><input class="ret_index" type="button" value="Retour au panier"/></a>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
