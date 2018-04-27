<?php
session_start();
include "fonctions.php";
if ($_SESSION['logged']['rights'] < 1)
{
	header('Location: index.php');
	exit;
}
else
{
	if ($_GET['content'] == "article")
	{
		$articles = unserialize(file_get_contents("private/articles"));
		if (isset($_GET['delete']) && $_GET['delete'] == "y")
		{
			unset($articles[$_GET['id']]);
		}
		else
		{
			if (isset($_GET['id']))
				$articles[$_GET['id']] = create_article($_POST['name'], $_POST['description'], $_POST['price'], $_POST['image']);
			$articles[] = create_article($_POST['name'], $_POST['description'], $_POST['price'], $_POST['image']);
		}
		file_put_contents("private/articles", serialize($articles));
	}
	if ($_GET['content'] == "categorie")
	{
		$categories = unserialize(file_get_contents("private/categories"));
		if (isset($_GET['delete']) && $_GET['delete'] == "y")
		{
			unset($categories[$_GET['id']]);
		}
		else
		{
			$item["name"] = $_POST["name"];
			$item["articles"] = $_POST["articles"];
			if (isset($_GET['id']))
				$categories[$_GET['id']] = $item;
			else
				$categories[] = $item;
		}
		file_put_contents("private/categories", serialize($categories));
	}
	if ($_GET['content'] == "users")
	{
		$users = unserialize(file_get_contents("private/users"));
		if (isset($_GET['delete']) && $_GET['delete'] == "y")
		{
			unset($users[$_GET['id']]);
		}
		else
		{
			$users[$_GET['id']]['rights'] = $_POST['rights'];
		}
		file_put_contents("private/users", serialize($users));
	}
	header('Location: admin.php');
}
?>
