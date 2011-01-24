<?php
//KwInstaller
//Part of KRU
//Copyright Kwpolska 2010. Licensed on GPLv3.
include_once './config.php';
if($configured == 'false') {
   echo "It seems like you haven't configured it. Read INSTALL, dude.";
   die();
}
try
{
   $pdo = new PDO($dbdsn, $dbusr, $dbpwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
   $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $stmt = $pdo -> exec('CREATE TABLE  `'.$dbtbl.'` (
            `code` TEXT NOT NULL ,
            `language` VARCHAR( 50 ) NOT NULL ,
            `timestamp` VARCHAR( 50 ) NOT NULL,
            `desc` VARCHAR( 250 ) NOT NULL
            ) ENGINE = MYISAM');
   echo "I think it's done.";
   unlink('install.php') or die(' failed to remove installer - do it yourself');
}
catch(PDOException $e)
{
   echo 'It failed. (code: none), error message:' . $e->getMessage();
}
?>
