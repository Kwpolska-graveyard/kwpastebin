<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="./style.css">
<title><?php echo $this->eprint($this->title); ?></title>
<!-- KwPastebin
Copyright Kwpolska 2010. Licensed on GPLv3. -->
</head>
<body>
<h1><?php echo $this->eprint($this->title); ?></h1>
<ul>
<li><a href="index.php">Add</a></li>
<li><form action="view.php" method="get">Go to: #<input name="id"></form></li>
</ul>
<?php echo $this->eprint($this->content); ?>
<div id="footer">
KwPastebin - Copyright Kwpolska 2010. Licensed on GPLv3. Using <a href="http://phpsavant.com">Savant</a>. <!--don't edit it, put your copyright notice above-->
</div>
</body>
</html>
