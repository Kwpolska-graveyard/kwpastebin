<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="Stylesheet" type="text/css" href="./style.css">
<title>Kw's Pastebin</title>
<!-- Kw's Pastebin
Copyright Kwpolska 2010. Licensed on GPLv2. -->
<h1 id="head">Kw's Pastebin</h1>
<ul>
	<li><a href="index.php">Add</a></li>
	<li><form action="view.php" method="get">Go to: #<input name="id"></form>
<?php
//Kw's Pastebin
//Copyright Kwpolska 2010. Licensed on GPLv2.
include_once './config.php';
try
	{
		$pdo = new PDO(DB_DSN, DB_USR, DB_PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
		$stmt = $pdo -> prepare('SELECT code, language FROM `'.DB_TNM.'` WHERE `timestamp` = ?');
		try {
			  $stmt->execute(array($_GET['id']));

			  $obj = $stmt->fetch(PDO::FETCH_OBJ);
			echo '<a href="./plain.php?id='.$_GET['id'].'">plaintext</a> - <a href="./dl.php?id='.$_GET['id'].'">download</a> - hilighted by <a href="http://qbnz.com/highlighter/">GeSHi</a><br>';
			$geshi = new GeSHI($obj->code, $obj->language);
			$geshi->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS, 2); $geshi->set_line_style('background: #fcfcfc;', 'background: #f0f0f0;'); //this determines the line styles; even = grey, odd - white-ish.
			echo $geshi->parse_code();
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
