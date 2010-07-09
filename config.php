<?php
define('DB_USR', 'root'); 
define('DB_PWD', 'password');
define('DB_NME', 'db'); //database name
define('DB_TNM', 'kwpastebin'); //table name
define('DB_HST', 'localhost'); //host
define('DB_DSN', 'mysql:host='.DB_HST.';dbname='.DB_NME); //using other db? try changing mysql to something else.
include_once './geshi.php';
?>
