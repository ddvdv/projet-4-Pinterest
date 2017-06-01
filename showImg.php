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
			<h1>Imagibrary</h1>

				<div class="row">
					<h3>Add another!</h3>
						<div>
							<?php echo uploader(); ?>
							<?php echo formToUpload();?>
						</div>


				</div>
		
				<div class="row">
					<h3>Collected so far</h3>
					<div class="grid">
				</div>

				<?php
			//function gérant l'affichage des images stockées
			displayImg();
		?>
			
		</div>

</body>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="script.js">
</script>

</html>
