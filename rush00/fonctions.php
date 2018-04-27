<?php

function	create_article($name, $description, $price, $image)
{
	$item = array();
	$item["name"] = htmlspecialchars($name);
	$item["description"] = htmlspecialchars($description);
	if (is_numeric($price) && $price > 0)
		$item["price"] = $price;
	else
		$item["price"] = 0;
	$item["image"] = htmlspecialchars($image);
	return $item;
}

function	get_categorie($id)
{
	$articles = unserialize(file_get_contents("private/articles"));
	$categorie = unserialize(file_get_contents("private/categories"));
	$list_articles = $categorie[$id]["articles"];
	$list_articles = explode(":", $list_articles);
	$ret = array();
	foreach ($list_articles as $nb)
		if (!empty($nb))
			$ret[$nb] = $articles[$nb];
	return ($ret);
}

function	auth($login, $password)
{
	$users = unserialize(file_get_contents("private/users"));
	foreach ($users as $i)
		if ($i["login"] == $login && $i["passwd"] == hash("whirlpool", $password))
			return $i;
	return FALSE;
}

function	create_user($login, $password, $right = 0)
{
	$new = array();
	$new["login"] = $login;
	$new["passwd"] = hash("whirlpool", $password);
	$new["rigths"] = $right;
	$new["phone"] = "";
	$new["mail"] = "";
	$new["address"] = "";
	$new["city"] = "";
	$new["country"] = "";
	$users = unserialize(file_get_contents("private/users"));
	$users[] = $new;
	file_put_contents("private/users", serialize($users));
}
function	is_alpha($s)
{
	$i = 0;
	while ($s[$i])
	{
		if (($s[$i] >= '0' && $s[$i] <= '9') || ($s[$i] >= 'a' && $s[$i] <= 'z') || ($s[$i] >= 'A' && $s[$i] <= 'Z'))
			$i++;
		else
			return (0);
	}
	return (1);
}

function	valid_login($login)
{
	if (strlen($login) < 5 || !is_alpha($login))
		return (0);
	return (1);
}

function	valid_passwd($passwd)
{
	$i = 0;
	$min = 0;
	$maj = 0;
	$num = 0;
	$other = 0;
	if (strlen($passwd) < 8)
		return (0);
	while ($passwd[$i])
	{
		if ($passwd[$i] >= '0' && $passwd[$i] <= '9')
			$num++;
		else if ($passwd[$i] >= 'a' && $passwd[$i] <= 'z')
			$min++;
		else if ($passwd[$i] >= 'A' && $passwd[$i] <= 'Z')
			$maj++;
		else
			$other++;
		$i++;
	}
	if ($min == 0 || $maj == 0 || $num == 0 || $other == 0)
		return (0);
	return (1);
}

function	valid_phone($phone)
{
	if (preg_match("/^[0-9]{10}$/", $phone))
		return (1);
	return (0);
}

function	valid_mail($mail)
{
	if (preg_match("/$[a-zA-Z0-9\.]+@[a-zA-Z0-9\.]+\.{1}[a-zA-Z0-9]+$/", $mail))
		return (1);
	return (0);
}

function	valid_city($city)
{
	if (preg_match("/^[a-zA-Z ]+$/", $city))
		return (1);
	return (0);
}

function	valid_country($country)
{
	if (preg_match("/^[a-zA-Z]+$/", $country))
		return (1);
	return (0);
}

function	valid_address($address)
{
	if (preg_match("/^[0-9]+[a-zA-Z, ]+$/", $address))
		return (1);
	return (0);
}

function	login_already_used($login)
{
	$data_base = unserialize(file_get_contents("private/users"));
	$i = 0;
	while ($data_base[$i])
	{
		if ($data_base[$i]['login'] == $login)
			return (1);
		$i++;
	}
	return (0);
}

function	get_info_account($info)
{
	$data_base = unserialize(file_get_contents("private/users"));
	$i = 0;
	while ($data_base[$i])
	{
		if ($data_base[$i]['login'] == $_SESSION['logged']['login'])
			return ($data_base[$i][$info]);
		$i++;
	}
	return (NULL);
}

?>
