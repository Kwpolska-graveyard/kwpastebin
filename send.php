<?php
ob_start();
//KwPastebin
//Copyright Kwpolska 2010. Licensed on GPLv3.
include_once './config.php';
try
	{
		$pdo = new PDO(DB_DSN, DB_USR, DB_PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$time = time();
		$stmt = $pdo -> prepare('INSERT INTO `'.DB_TNM.'` (`code`, `language`, `timestamp`)	VALUES(
				:code,
				:language,
				:time)');
		$stmt -> bindValue(':code', $_POST['code'], PDO::PARAM_STR);
		$stmt -> bindValue(':language', $_POST['lng'], PDO::PARAM_STR);
		$stmt -> bindValue(':time', $time, PDO::PARAM_STR);
		$ilosc = $stmt -> execute();
		if($ilosc > 0)
		{
			echo 'Adding... done.';
		}
		else
		{
			ob_end_flush();
			die('Adding... failed!');
		}
		// Okay, we've added it, so now, I have to send user to it...
		/*$id = $pdo -> lastInsertId; //unused route
		$VIEWPP = "another unused route, sorry.";
		$url = $VIEWPP.'?id='.$id;
		hey, this file has two unused routes! yay! */
		header('Location: ./view.php?id='.$time);
	}
catch(PDOException $e)
	{
		echo 'ERROR: ' . $e->getMessage();
	}
ob_end_flush();
?>
