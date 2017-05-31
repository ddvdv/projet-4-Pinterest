<?php
//import des functions externes
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
			<h3><a href="index.php">Add another!</a></h3>
			<p class="alert alert-info"> <?php echo uploadImg(); ?> </p>
		</div>
		
		<div class="grid" data-isotope='{ "itemSelector": ".grid-item", "layoutMode": "fitRows" }'>
		<?php
			//function gérant l'affichage des images stockées
			displayImg();
		?>
			
		</div>

</body>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

</html>
