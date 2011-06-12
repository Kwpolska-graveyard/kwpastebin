<?php
//KwPastebin
//Copyright Kwpolska 2010-2011.

/// KWPASTBIN SETTINGS ///
$configured = false; //IMPORTANT: change it to true
$sitename = 'KwPastebin'; //the page name
$open = true; //possibility of adding new pastes
$closedkey = 'forceadd'; // index.php?key=$closedkey forces the script to let
                         // you add something

/// DATABASE SETTINGS ///

$dbsys = 'mysql'; //Valid ones are: 'mysql', 'sqlite'
                  //Support for others is not available right now.

# Edit the one that you want to use, don't modify the other one.

// MYSQL //
$dbusr = 'root'; //database user
$dbpwd = 'password'; //database password
$dbnme = 'db'; //database name
$dbtbl = 'kwpastebin'; //table name
$dbhst = 'localhost'; //host
$dbdsn = 'mysql:host='.$dbhst.';dbname='.$dbnme; //don't modify

// SQLITE //
$dblocation = 'kwpastebin.sqlite'; //Valid ones are: a file, ':memory:'

function createPDO() {
    global $dbsys, $dbdsn, $dbusr, $dbpwd;
    switch($dbsys) {
        case 'mysql':
            return new PDO($dbdsn, $dbusr, $dbpwd,
                           array(PDO::MYSQL_ATTR_INIT_COMMAND =>
                                 "SET NAMES utf8"));
            break;
        case 'sqlite':
            return new PDO('sqlite:'.$dblocation);
            break;
        default:
            echo 'The RDBMS '.$dbsys.' is not supported by KwPastebin.';
    }
}

/// DYNAMIC SETTINGS ///
function savant() {
   global $content, $sitename;
   include_once 'Savant3.php';
   $tpl = new Savant3();
   $tpl->setEscape();
   $tpl->title = $sitename;
   $tpl->content = $content;
   $tpl->display('index.tpl.php');
}
?>
