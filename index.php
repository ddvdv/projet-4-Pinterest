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
		<link rel="stylesheet" href="perso.css">
	</head>
	<body>
		<div class="remodal-bg container">
			<h1>Imagibrary</h1>

			<div class="row">

				<h3>Add another!</h3>
					<form method="post" enctype="multipart/form-data" class="form-inline">
						<div class="form-group">
							<input id="legende" name="legende" class="form-control" placeholder="Image description" />
						</div>
						<div class="form-group">
							<label class="btn btn-default btn-file">
								  Browse <input type="file" name="image" style="display: none;">
						</div>
						<div class="form-group">
							<button type="submit" value="submit" class="btn btn-primary">Upload!</button>
						</div>
					</form>
			</div>
	
			<div class="row">
					<?php  echo uploader(); ?>
			</div>


			<div class="row">
				<h3>Collected so far</h3>
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
