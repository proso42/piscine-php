<?php
include "header.php";
?>
<div style="height:20px;"></div>
<div id="page">
<h1><?php
$articles = unserialize(file_get_contents("private/articles"));
echo $articles[$_GET["id"]]["name"];
?></h1>
<div><img id=item style="max-width:600px;" src=<?php echo $articles[$_GET["id"]]["image"] ?>>
<p><?php echo $articles[$_GET["id"]]["description"];?></p></div>
<h2><?php echo $articles[$_GET["id"]]["price"];?>$</h2>
<a href="panier.php?id=<?php echo $_GET['id']; ?>&qte=1" id="button-panier">Ajouter au panier</a>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
