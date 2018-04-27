<?php
include "header.php";
?>
<div>
</br>
<?php
if (isset($_SESSION['logged']))
{
	unset($_SESSION['logged']);
	echo "<div style=\"width:20%\" class=\"green_block\">Poney correctement déséller !</div>";
}
else
	echo "<div style=\"width:20%\" class=\"red_block\">Aucun Poney à déséller !</div>";
?>
</br>
<a href="index.php"><input class="ret_index" type="button" value="Retour à l'écurie"/></a>
<a href="panier.php"><input class="ret_index" type="button" value="Retour au panier"/></a>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
