<?php session_start();?>
<html>
<head>
<title>PONEYS !!!!!!!!!!!</title>
<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/png" href="images/logo.png" />
</head>
<body>
<header>
	<a href=index.php><img src="images/logo.png" width=50px><h1>PonyLand</h1></a><div id="right">
		<a href=<?php
			if (isset($_SESSION['logged']))
				echo "log_out.php";
			else
				echo ""
		?>><?php
			if (isset($_SESSION['logged']))
				echo "Log Out";
			else
				echo ""
		?>
		</a></div><div id="right"><a href="panier.php" id="panier">Panier</a><a href=
		<?php
			if ($_SESSION['logged'])
				echo "account.php";
			else
				echo "sign_in.php";
		?>
	>
		<?php
			if ($_SESSION['logged'])
				echo $_SESSION['logged']['login'];
			else
				echo "Sign in";
		?>
	</a></div>
<nav>
<div class="menu">Categorie<div class="submenuhide"><div class="submenu">
<?php
$categories = unserialize(file_get_contents("private/categories"));
foreach	($categories as $key => $item)
{
?>
	<a href="index.php?categorie=<?php echo $key;?>" class="subelem"><?php echo $item["name"];?></a>
<?php
}
?>
</div></div></div>
</nav>
</header>
<div style="height:124px;"></div>
