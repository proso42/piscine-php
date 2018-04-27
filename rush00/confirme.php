<?php
include "header.php";
?>
<div>
</br>
<?php
	echo "<div style=\"width:25%\" class=\"green_block\">Le Poney a été correctement retiré de l'écurie !</div>";
	$data_base = unserialize(file_get_contents("private/users"));
	$i = 0;
	while ($data_base[$i]['login'] != $_SESSION['logged']['login'])
		$i++;
	unset($data_base[$i]);
	file_put_contents("private/users", serialize($data_base));
	unset($_SESSION['logged']);
?>
</br>
<a href="index.php"><input class="ret_index" type="button" value="Retour à l'écurie"/></a>
<a href="account.php"><input class="ret_index" type="button" value="Retour au compte"/></a>
<a href="panier.php"><input class="ret_index" type="button" value="Retour au panier"/></a>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
