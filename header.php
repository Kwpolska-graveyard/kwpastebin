<?php
//Kw's Pastebin
//Copyright Kwpolska 2010. Licensed on GPLv2.
include_once './config.php';
echo '<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="Stylesheet" type="text/css" href="./style.css">
<title>'.KP_NME.'</title>
<!-- Kw\'s Pastebin
Copyright Kwpolska 2010. Licensed on GPLv2. -->
<h1 id="head">'.KP_NME.'</h1>
<ul>
	<li><a href="index.php">Add</a></li>
	<li><form action="view.php" method="get">Go to: #<input name="id"></form>
</ul>';
?>
