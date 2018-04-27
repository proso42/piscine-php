<?php
include "header.php";
include "fonctions.php";
?>
<div id="page" style="margin-top:50px">
	<h2>Informations générales du compte</h2>
	Nom du poney : <?php echo $_SESSION['logged']['login']?>
	</br>
	</br>
	Mot de passe : **********
	</br>
	</br>
	Téléphonne : <?php
	if (($phone = get_info_account("phone")))
		echo $phone;
	else
		echo "Non renseigné";
	?>
	</br>
	</br>
	Email : <?php
		if (($mail = get_info_account("mail")))
			echo $mail;
		else
			echo "Non renseigné";
	?>
	</br>
	</br>
	Adresse : <?php
		if (($country = get_info_account("address")))
			echo $country;
		else
			echo "Non renseigné";
	?>
	</br>
	</br>
	Ville : <?php
		if (($city = get_info_account("city")))
			echo $city;
		else
			echo "Non renseigné";
	?>
	</br>
	</br>
	Pays : <?php
		if (($country = get_info_account("country")))
			echo $country;
		else
			echo "Non renseigné";
	?>
	</br>
	</br>
	-----------------------------------------------------------------------------------
	<h2>Options de modification du compte</h2>
	<a href="edit_passwd.php">Modifier le secret du Poney</a>
	</br>
	</br>
	<a href="edit_phone.php">Modifier le numéro de téléphonne du Poney</a>
	</br>
	</br>
	<a href="edit_mail.php">Modifier le mail du Poney</a>
	</br>
	</br>
	<a href="edit_address.php">Modifier l'adresse du Poney</a>
	</br>
	</br>
	<a href="edit_city.php">Modifier la ville du Poney</a>
	</br>
	</br>
	<a href="edit_country.php">Modifier le pays du Poney</a>
	</br>
	</br>
	<?php
		if ($_SESSION['logged']['rights'] < 2)
			echo "<a href=\"delete_account.php\">Retirer le Poney de l'écurie</a>";
	?>
	<?php
	 	if ($_SESSION['logged']['rights'] >= 1)
			echo "<a href=\"admin.php\">Visiter l'écurie administrive<a>";
 	?>
</div>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
