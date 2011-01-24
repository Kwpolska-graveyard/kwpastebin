<?php
//KwPastebin
//Copyright Kwpolska 2010-2011.

/// KWPASTBIN SETTINGS ///
$configured = false; //IMPORTANT: change it to true.
$sitename =  'KwPastebin'; //the page name
$outfilename = 'kwpastebin-output'; // output file name, it's txt

/// DATABASE SETTINGS ///
$dbusr = 'root'; // database user
$dbpwd = 'password'; // database password
$dbnme = 'db'; //database name
$dbtbl = 'kwpastebin'; //table name
$dbhst = 'localhost'; //host
$dbdsn = 'mysql:host='.$dbhst.';dbname='.$dbnme; // change mysql if needed

/// DYNAMIC SETTINGS ///
function savant() {
	global $content;
	include_once 'Savant3.php';
	$tpl = new Savant3();
	$tpl->setEscape();
	$tpl->title = KP_NME;
	$tpl->content = $content;
	$tpl->display('index.tpl.php');
}
?>
