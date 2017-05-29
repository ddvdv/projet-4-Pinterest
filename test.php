<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<meta charset="utf-8">
</head>
<body>
<?php

require "SimpleImage.php";

$objImg = new \claviska\SimpleImage();
$objImg->fromFile('canyon.jpg');
$objImg->toFile('cacanyonyon.jpg');

?>

</body>
</html>
