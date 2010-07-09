<?php
ob_start();
//Kw's Pastebin
//Copyright Kwpolska 2010. Licensed on GPLv2.
include_once './config.php';
try
	{
		$pdo = new PDO(DB_DSN, DB_USR, DB_PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $pdo -> exec('CREATE TABLE  `'.DB_TNM.'` (
				`code` VARCHAR( 4294967295 ) NOT NULL ,
				`language` VARCHAR( 50 ) NOT NULL ,
				`timestamp` VARCHAR( 50 ) NOT NULL
				) ENGINE = MYISAM');
		echo 'Congratulations. It seems like it worked. It finished with (1 = installed): '.$stmt;
	}
catch(PDOException $e)
	{
		echo 'ERROR: ' . $e->getMessage();
		echo '\n<br />That means, it isn\'t installed. Did you modify the config.php correctly?';
	}
?>
