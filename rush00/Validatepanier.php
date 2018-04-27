<?php
include "fonctions.php";
include "header.php";
?>
<div>
<?php
if (!isset($_SESSION['logged']))
{
	echo "<div style=\"width:15%\" class=\"red_block\">Connectez vous !</div>";
}
else
{
	$str_panier = unserialize(file_get_contents("private/panier"));
	$_SESSION['panier']['login'] = $_SESSION['logged']['login'];
	$str_panier[] = $_SESSION['panier'];
	file_put_contents("private/panier", serialize($str_panier));
	unset($_SESSION['panier']);
	echo "<div style=\"width:30%\" class=\"green_block\">Le panier a été validé !</div>";

}
?>
</br>
<a href="index.php"><input class="ret_index" type="button" value="Retour à l'écurie"/></a>
<?php
if (isset($_SESSION['logged']))
	echo "<a href=\"account.php\"><input class=\"ret_index\" type=\"button\" value=\"Retour au compte\"/></a>";
else
	echo "<a href=\"sign_in.php\"><input class=\"ret_index\" type=\"button\" value=\"Sign In\"/></a>";
?>
<a href="panier.php"><input class="ret_index" type="button" value="Retour au panier"/></a>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
