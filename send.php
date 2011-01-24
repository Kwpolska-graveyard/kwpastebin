<?php
ob_start();
//KwPastebin
//Copyright Kwpolska 2010. Licensed on GPLv3.
include_once './config.php';
try
{
   $pdo = new PDO($dbdsn, $dbusr, $dbpwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
   $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $time = time().'.'.rand(0, 9);
   $stmt = $pdo -> prepare('INSERT INTO `'.$dbtbl.'` (`code`, `language`, `timestamp`)	VALUES(
            :code,
            :language,
            :time)');
   $stmt -> bindValue(':code', $_POST['code'], PDO::PARAM_STR);
   $stmt -> bindValue(':language', $_POST['lng'], PDO::PARAM_STR);
   $stmt -> bindValue(':time', $time, PDO::PARAM_STR);
   $ilosc = $stmt -> execute();
   if($ilosc = 0)
      ob_end_flush();
   die('ERROR: Adding failed!');
}
// Okay, we've added it, so now, I have to send user to it...
header('Location: ./view.php?id='.$time);
}
catch(PDOException $e)
{
   echo 'ERROR: ' . $e->getMessage();
}
ob_end_flush();
?>
