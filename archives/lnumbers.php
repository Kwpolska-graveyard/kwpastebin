<?php ob_start();
/*this file isn't working. fails to give the code. To incorporate, you must:
* create an if in view.php. make it using this rule:
** if there is no cookie called kwpLnums OR there is one with value == 1, then execute contents of line 26.
* put this file into the main directory
* add link to it to view.php
* if you did it, say me about it and give the files, your help will be credited.
*/
if ($_COOKIE['kwpLnums'] == 1) {
	setcookie('kwpLnums', 0, 2147483640); //cookie will be removed 7 seconds before y2k38, who will make use of it to this date?
} else {
	setcookie('kwpLnums', 1, 2147483640);
}
header('Location: ./view.php?id='.$_GET['id']);
ob_end_flush();
