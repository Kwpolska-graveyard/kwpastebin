<?php ob_start();
//KwPastebin
//Copyright Kwpolska 2010. Licensed on GPLv3.

if (isset($_COOKIE['kwpstln'])) {
    if ($_COOKIE['kwpstln'] == 1) {
        setcookie('kwpstln', 0, 2147483640); //cookie will be removed 7 seconds before y2k38, who will make use of it to this date?
    } else {
        setcookie('kwpstln', 1, 2147483640);
    }
    if(isset($_GET['key'])) $key = $_GET['key']; else $key = '';
    header('Location: ./index.php?id='.$_GET['id'].$key);
    ob_end_flush();
}
?>
