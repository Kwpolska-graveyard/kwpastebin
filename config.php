<?php
//KwPastebin
//Copyright Kwpolska 2010. Licensed on GPLv3.
define('CONFIGURED', 'false'); //IMPORTANT: change it to true.
define('KP_NME', 'KwPastebin'); //the page name
define('KP_FLN', 'kwpastebin-output'); // output file name, it's txt
define('DB_USR', 'root'); // the user
define('DB_PWD', 'password'); // database password
define('DB_NME', 'db'); //database name
define('DB_TNM', 'kwpastebin'); //table name
define('DB_HST', 'localhost'); //host
define('DB_DSN', 'mysql:host='.DB_HST.';dbname='.DB_NME); // change mysql if needed
function savant() {
include_once 'Savant3.php';
$tpl = new Savant3();
$tpl->title = KP_NME;
$tpl->content = $content;
$tpl->display('index.tpl.php');
}
?>
