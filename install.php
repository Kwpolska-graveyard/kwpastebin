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
		if ($stmt == 0) echo 'It failed. (code: 0)'; else echo 'Congratulations. (code: 1)';
	}
catch(PDOException $e)
	{
		echo 'It failed. (code: none), error message:' . $e->getMessage();
	}
?>
