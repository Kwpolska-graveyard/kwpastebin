<?php
header('Content-type: text/plain');
header('Content-Disposition: attachment; filename="pastebin-output.txt"');
//Kw's Pastebin
//Copyright Kwpolska 2010. Licensed on GPLv2.
include_once './config.php';
try
	{
		$pdo = new PDO(DB_DSN, DB_USR, DB_PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
		$stmt = $pdo -> query('SELECT code, language FROM `'.DB_TNM.'` WHERE `timestamp` =?');
		try {
			  $stmt->execute(array($_GET['id']));

			  $obj = $stmt->fetch(PDO::FETCH_OBJ);
			  echo $obj->code;
		} catch(PDOException $e){
			  echo 'ERROR: ' . $e->getMessage();
		}
		$stmt -> closeCursor();

	}
catch(PDOException $e)
	{
		echo 'ERROR: ' . $e->getMessage();
	}
?>
