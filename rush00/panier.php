<?php
session_start();

if (!isset($_SESSION['panier']))
	$_SESSION['panier'] = array();
if (isset($_GET['id']))
{
	if (!isset($_SESSION['panier'][$_GET['id']]))
		$_SESSION['panier'][$_GET['id']] = 0;
	$articles = unserialize(file_get_contents("private/articles"));
	if (isset($articles[$_GET['id']]))
		$_SESSION['panier'][$_GET['id']] += $_GET['qte'];
	if ($_SESSION['panier'][$_GET['id']] <= 0)
		unset($_SESSION['panier'][$_GET['id']]);
}

?><html>
<?php
include "header.php";
?>
<div style="height:20px;"></div>
<div id="page">
<h1>Panier</h1>
<?php
if (count($_SESSION['panier']) == 0)
	echo "Votre panier est vide";
else
	$articles = unserialize(file_get_contents("private/articles"));
foreach ($_SESSION['panier'] as $key => $item)
{
?>
	<div class="panier-elem">
		<img src=<?php
			echo $articles[$key]["image"];
		?>>
		<h3>
			<?php
				echo $articles[$key]["name"];
			?>
		</h3>
		Prix : <?php
			echo $articles[$key]["price"]*$item;
		?>$
		<br /><br/>
		Quantit&eacute; : <?php
			echo $item;
		?>
		</br></br>
		<form action="panier.php" method="get">
			<input type="hidden" value=<?php
					echo $key;
				?>
				name="id" />
				<input min=-<?php echo $item; ?> value="0" type="number" name="qte" />
				<input type=submit value="Ok" />
		</form>
		<a href="panier.php?id=<?php echo $key."&qte=-".$item; ?>">Supprimer</a>
	</div>
<?php
}
?>
<?php
	if (!isset($_SESSION['logged']) && (count($_SESSION['panier']) > 0))
		echo "<a href=\"sign_in.php\">Valider le panier</a>";
	else if (!(count($_SESSION['panier']) == 0))
		echo "<a href=\"Validatepanier.php\">Valider le panier</a>";
?>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
