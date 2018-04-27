<?php
include "header.php"
?>
<div>
</br>
<?php
$re_hash = hash("whirlpool", $_POST['passwd']);
if ($re_hash == $_SESSION['logged']['passwd'])
{
	echo "<div style=\"width:45%\" class=\"green_block\">Appyuer sur le bouton pour confirmer le retrait de votre Poney de notre écurie</div>";
	$href = "confirme.php";
}
else
{
	echo "<div style=\"width:30%\" class=\"red_block\">Le secret que vous avez indiqué est foireux !</div>";
	$href = "account.php";
}
?>
</br>
<a href=<?php
	echo $href;
	?>
><input class="ret_index" type="button" value=<?php
	if ($href == "confirme.php")
	 	echo "Confirmer";
	else
		echo "Retour";
	?>
 /></a>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
