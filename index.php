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
			<h1>Submit your pic</h1>
			<h3><a href="showImg.php">See your pics!</a></h3>
		</div>
		
		<div class="row">
			<form action="showImg.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
						<input id="legende" name="legende" class="form-control" placeholder="Le nom de votre image..." />
				</div>
				<div class="form-group">
					<label class="btn btn-default btn-file">
  					  Browse <input type="file" name="image" style="display: none;">
				</label>
				<label class="radio">
  					 <input type="radio" name="thumb" value="yes">Convert in Thumbnail
				</label>
				<label class="radio">
				  	 <input type="radio" name="thumb" value="no">Conserve original size
				</label>
				</div>
				<div class="form-group">
					<button type="submit" value="submit" class="btn btn-primary">Upload!</button>
				</div>
			</form>
		</div>

</body>
</html>