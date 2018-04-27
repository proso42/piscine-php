<?php
include "header.php"
?>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Choix du poney</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form method="POST" action="create_account.php">
		<div class="Sign_rect">
			<p class="Ident" align="center">Choisis ton poney</p>
			<span class="Ident">Nom du Poney:</span><input style="margin-left:74px" type="text" name="login" value=""/>
			</br>
			<span class="Ident">Secret du Poney:</span> <input style="margin-left:50px" type="text" name="passwd" value=""/>
			</br>
			<input class="but-submit" type="submit" name"submit" value="En selle !"/>
		</div>
	</form>
</body>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
