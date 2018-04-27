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
<h1>Ecurie Administrative</h1>
<div id="content">
<a href="get_panier.php"><h5>Gestions des commandes</h5></a>
<h5>Gestion des poneys</h5>
<table>
<?php
$users = unserialize(file_get_contents("private/users"));
foreach ($users as $key => $user)
{
?>
<form action="add_admin.php?content=users&id=<?php echo $key;?>" method="post">
<tr>
<th><?php echo $key;?></th>
<th><?php echo $user['login'];?></th>
<th><input name="rights" type="number" value="<?php echo $user['rights']; ?>"/></th>
<th><input type="submit" value="modify"/></th>
<th><a href="add_admin.php?content=users&id=<?php echo $key;?>&delete=y">Delete</a></th>
</tr>
</form>
<?php 
}
?>

</table>
<h5>Gestion des categories</h5>
<table>
<?php
$categorie = unserialize(file_get_contents("private/categories"));
foreach ($categorie as $key => $categorie)
{
?>
<form action="add_admin.php?content=categorie&id=<?php echo $key; ?>" method=post><tr><th><?php echo $key;?></th><th><input name="name" value="<?php echo $categorie['name'];?>"/></th><th><input name="articles" value="<?php echo $categorie['articles']; ?>"/></th><th><input type="submit" value="modify"/></th><th><a href="add_admin.php?content=categorie&id=<?php echo $key;?>&delete=y">Delete</a></th></tr></form>
<?php 
}
?>
<form action="add_admin.php?content=categorie" method=post><tr><th><?php echo $key + 1;?></th><th><input name="name" value=""></th><th><input name="articles" value=""></th><th><input type="submit" value="add"></th></tr></form>
</table>
<h5>Gestion des articles</h5>
<table>
<?php
$categorie = unserialize(file_get_contents("private/articles"));
foreach ($categorie as $key => $categorie)
{
?>
			<form action="add_admin.php?content=article&id=<?php echo $key;?>" method="post"><tr><th><?php echo $key;?></th><th><input name="name" value="<?php echo $categorie['name'];?>"/></th><th><input name="image" value="<?php echo $categorie['image']; ?>"/></th><th><textarea name="description"><?php echo $categorie['description'] ?></textarea></th><th><input name="price" type=numbers min=1 value="<?php echo $categorie['price']; ?>"/></th><th><input type="submit" value="modify"></th><th> <a href="add_admin.php?content=article&id=<?php echo $key;?>&delete=y">Delete</a></th></tr></form>
<?php 
}?>
<form action="add_admin.php?content=article" method="post">
<tr><th><?php echo $key + 1;?></th><th><input name="name" type="text" /></th><th><input name="image" type="text" /></th><th><textarea name="description" cols="40" rows="5"></textarea> </th><th><input type="number" name="price" min=1 step="any" /></th><th><input type="submit" value="add"></th></tr></form></table><br /></div>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div><footer>
</body>
</html>
<?php	
}
?>
