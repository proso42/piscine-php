<?php
session_start();
if ($_SESSION['logged']['rights'] < 1)
{
	header('Location: index.php');
	exit;
}
else
{
	include "header.php";
?>
<div style="margin-top:50px;" id="page">
<h1>Commandes : </h1>
<?php
	$paniers = unserialize(file_get_contents("private/panier"));
	$articles = unserialize(file_get_contents("private/articles"));
	foreach ($paniers as $value)
	{
if (is_array($value))
	{
?>
	<p><?php echo $value["login"];?>:</p>
<table>
<tr>
<th width=100px;>
nom
</th>
<th width=100px>
Quantit&eacute;
</th>

</tr>
<?php
	foreach($value as $id => $qte)
	{
		if ($id != "login")
		{
?>
<tr>
<th>
<?php echo $articles[$id]["name"]; ?>
</th>
<th>
<?php echo $qte; ?>
</th>
</tr>
<?php
		}
	}
?>
</table>
<?
	}
	}
?>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div><footer>
</body>
</html>
<?php
}
?>
