<?php
define('KP_NME', 'Kw\'s Pastebin'); // page name
define('KP_FLN', 'kwpastebin-output'); // output file name, it's txt
define('DB_USR', 'root'); // the user
define('DB_PWD', 'password'); // if this is your password to db, you're retarded.
define('DB_NME', 'db'); //database name
define('DB_TNM', 'kwpastebin'); //table name
define('DB_HST', 'localhost'); //host
define('DB_DSN', 'mysql:host='.DB_HST.';dbname='.DB_NME); //using other db engine? try changing mysql to something else.
include_once './geshi.php';
?>
