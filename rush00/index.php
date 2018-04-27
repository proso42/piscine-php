<?php
include "fonctions.php";
include "header.php";
?>
<div id="image">
<img src="images/poneys.jpg" width=60%>
</div>
<div id="page">
<h1><?php if (isset($_GET["categorie"]))
echo $categories[$_GET["categorie"]]["name"];
else
echo "Tout les articles"?></h1>
	<div id="content">
<?php
	if (!isset($_GET["categorie"]))
		$categorie = unserialize(file_get_contents("private/articles"));
	else
		$categorie = get_categorie($_GET["categorie"]);
	if (count($categorie) == 0)
		echo "Il n'y aucun article ici";
	else
	foreach ($categorie as $key => $item)
	{
?>
	<a href="item.php?id=<?php echo $key;?>" class="elem"><img src="<?php echo $item["image"];?>" height=200px><div class="name"><?php echo $item["name"];?></div><div class="price"><?php echo $item["price"];?>$</div></a>
<?php
	}
?>
</div>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</body>
</html>
