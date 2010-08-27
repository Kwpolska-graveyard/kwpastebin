<?php
//KwInstaller
//Part of KRU
//Copyright Kwpolska 2010. Licensed on GPLv3.
include_once './config.php';
if(CONFIGURED == 'false') {
echo "It seems like you haven't configured it. Read INSTALL, dude."
die();
}
try
	{
		$pdo = new PDO(DB_DSN, DB_USR, DB_PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $pdo -> exec('CREATE TABLE  `'.DB_TNM.'` (
				`code` VARCHAR( 4294967295 ) NOT NULL ,
				`language` VARCHAR( 50 ) NOT NULL ,
				`timestamp` VARCHAR( 50 ) NOT NULL
				) ENGINE = MYISAM');
		echo "I think it's done.";
		unlink('install.php') or die(' failed to remove installer - do it yourself');
	}
catch(PDOException $e)
	{
		echo 'It failed. (code: none), error message:' . $e->getMessage();
	}
?>
