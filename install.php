<?php
//KwInstaller
//Part of KRU
//Copyright Kwpolska 2010. Licensed on GPLv3.
include_once './config.php';
if($configured == false) {
   echo "It seems like you haven't configured it.  Read README.md.";
   die();
}
try
{
   $pdo = new PDO($dbdsn, $dbusr, $dbpwd, array(PDO::MYSQL_ATTR_INIT_COMMAND =>
   "SET NAMES utf8"));
   $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $stmt = $pdo -> exec('CREATE TABLE  `'.$dbtbl.'` (
                        `pasteid` VARCHAR(100) NOT NULL,
                        `timestamp` INT(50) NOT NULL,
                        `language` VARCHAR(50) NOT NULL,
                        `dsc` VARCHAR(250) NULL,
                        `rmable` TINYINT(1) NOT NULL,
                        `rmid` VARCHAR(100) NOT NULL,
                        `code` TEXT NOT NULL,
                        PRIMARY KEY (`pasteid`)
                        ) ENGINE = MYISAM');
   echo "The KwPastebin was successfully installed.";
   @unlink('install.php') or die(' failed to remove installer -- do it
   yourself');
}
catch(PDOException $e)
{
   echo 'Error message:' . $e->getMessage();
}
?>
