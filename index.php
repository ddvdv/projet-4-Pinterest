<?php
//import des functions externes
require "functions.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Imagibrary</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel='stylesheet' href='./Remodal-master/dist/remodal-default-theme.css'>
		<link rel='stylesheet' href='./Remodal-master/dist/remodal.css'>
		<link href="https://fonts.googleapis.com/css?family=Bubbler+One" rel="stylesheet">
		<link rel="stylesheet" href="perso.css">
	</head>
	<body>
		<div class="remodal-bg container">
			<h1><a href='index.php'>Imagibrary</a></h1>

			<div class="row uploadDiv">
					<?php  echo uploader(); ?>
					<form method="post" enctype="multipart/form-data" class="form-inline">
						<div class="form-group">
							<label class="btn btn-default btn-file">
								  New <input type="file" name="image" style="display: none;">
						</div>
						<div class="form-group">
							<input id="legende" name="legende" class="form-control" placeholder="Describe your new image" />
						</div>
						<div class="form-group">
							<button type="submit" value="submit" class="btn btn-primary">Upload!</button>
						</div>
					</form>
			</div>
	


			<div class="row">
				<div class="grid">
					<?php displayImg(); ?>
				</div>
			</div>

		</div>
	</body>

	<!-- import jQuery -->
	<script
	  src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<!-- import Isotope -->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
	<!-- import JS Remodal -->
	<script src="./Remodal-master/dist/remodal.js"> </script>
	<!-- import JS perso -->
	<script src="script.js"> </script>

</html>
