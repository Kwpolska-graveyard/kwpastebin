<?php
//KwInstaller
//Part of KRU
//Copyright Kwpolska 2010. Licensed on GPLv2.
function putContinue($value) {
echo '<form method="POST" action="install.php"><input type="hidden" name="step" value="'.$value.'"><input type="submit" value="continue"></form>';
}
function putContinue2($value) {
echo '<input type="hidden" name="step" value="'.$value.'">';
}
if (count($_POST) == 0) {
echo 'Begin the install by pressing continue. ';
putContinue(1);
}
switch($_POST['step'])
{
	case 1:
		echo '<form method="POST" action="install.php">Welcome to the awesome KwInstaller. The only thing I will let you is to edit my config file.<br><textarea name="config" cols="80" rows="24">'.file_get_contents('./config.php').'</textarea><br>'.putContinue2(2).'<input type="submit" value="ok"></form>';
		break;
	case 2:
		chmod('./config.php', 0777) or die('It failed. (code: none, step: 2, failed: setting chmod of config.php to 777, do it yourself)');
		if(file_put_contents('./config.php', $_POST['config']) != 0) { putContinue(3); } else { echo "It failed. (code: none, step: 2, saving into config file"; )
		chmod('./config.php', 0755) or echo 'Notice: cannot set chmods of config.php back to 755. You have to do it yourself.';
		break;
	case 3:
		try
			{
			include_once './config.php';
			$pdo = new PDO(DB_DSN, DB_USR, DB_PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $pdo -> exec('CREATE TABLE  `'.DB_TNM.'` (
					`code` VARCHAR( 4294967295 ) NOT NULL ,
					`language` VARCHAR( 50 ) NOT NULL ,
					`timestamp` VARCHAR( 50 ) NOT NULL
					) ENGINE = MYISAM'); // edit it with your needs. example from kwpastebin.
			if ($stmt == 0) { die('It failed. (code: 0)'); } else { echo 'Congratulations. (code: 1)' };
			unlink('install.php') or die(' failed to remove installer');
			}
		catch(PDOException $e)
			{
			echo 'It failed. (code: none), error message:' . $e->getMessage();
			}
		break;
}
?>
