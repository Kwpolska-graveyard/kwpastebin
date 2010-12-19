<?php
include_once './config.php';
header('Content-type: text/plain');
header('Content-Disposition: attachment; filename="'.KP_FLN.'.txt"');
//KwPastebin
//Copyright Kwpolska 2010. Licensed on GPLv3.
try
	{
		$pdo = new PDO(DB_DSN, DB_USR, DB_PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
		$stmt = $pdo -> prepare('SELECT code, language FROM `'.DB_TNM.'` WHERE `timestamp` = ?');
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