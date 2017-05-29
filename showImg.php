<?php
	$label = $_POST['label'];
	$imgTmp = $_FILES['image']['tmp_name'];
	$imgName = $_FILES['image']['name'];

	require "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pinterest perso</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="perso.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Here are your pics</h1>
		</div>
		
		<div class="row">
		<?php
			print_r($img);
			echo $imgTmp . "<br>";
			echo $imgName;
			uploadImg();
		?>
			
		</div>

</body>
</html>
