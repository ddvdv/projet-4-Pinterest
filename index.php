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
		</div>
		
		<div class="row">
			<form action="showImg.php" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label id="legende">
						<input id="legende" name="legend" class="form-control"/>
					</label>
				</div>
				<div class="form-group">
					<label id="image">
						<input type="file" name="image" id="image" class="form-control"/>
					</label>
				</div>
				<div class="form-group">
					<button type="submit" value="submit" class="btn btn-default">Upload!</button>
				</div>
			</form>
		</div>

</body>
</html>