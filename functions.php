<?php
require "SimpleImage.php";				


// function gérant l'import de fichiers img
function uploadImg(){
	// si une légende est renseignée, remplacer le nom de fichier par cette légende, sinon prendre le nom de fichier original
	if (($_POST['legende']) != ""){
		$imgName = $_POST['legende'];
	}
	else {
		$imgName = $_FILES['image']['name'];
	}

	// si un fichier est uploadé
	if (($_FILES['image']['type']) != ""){
		// définit des variables moins verbeuses
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgType = $_FILES['image']['type'];
		$imgSize = $_FILES['image']['size'];
		// vérification du type de fichier image
		if ($imgType == "image/jpeg" OR
			$imgType == "image/gif" OR
			$imgType == "image/png" OR
			$imgType == "image/webp" ){
			// Récupération de l'extension de l'image
				$imgType = "." . substr($imgType, 6);
			// vérification de la taille de fichier (moins de 10mb)
			if ($imgSize < 10000000){
				// Conversion en carré si l'option est cochée
				if ($_POST['thumb'] == "yes"){
					// Conversion en carré si l'option est cochée
					$imgThumbName = "files/". $imgName . "_thumb" . $imgType;
					// Appel à une lib POO externe
					$objImg = new \claviska\SimpleImage();
					$objImg->fromFile($imgTmp);
					$objImg->thumbnail(150,150);
					$objImg->toFile($imgThumbName);
					$msg = "Votre thumbnail a bien été uploadé <br>";
				}
				else {
				// Sinon, enregistrement de l'image originale
				$imgFullName = "files/". $imgName . $imgType;
				$uploadOK = move_uploaded_file($imgTmp, $imgFullName);
					if ($uploadOK){
					$msg = "Votre image a bien été uploadée <br>";
					}
				}
			}
			else {
				$msg = "le site ne supporte pas les fichiers de taille supérieure à 10mb.";
			}

		} else {
			$msg = "Le site ne supporte pas les fichiers de formats <em>" . $imgType . "</em>.";
		}

	} else {
		$msg = "Veuillez sélectionner une image à uploader.";
	}
	return $msg;
}

// function gérant l'affichage des images stocké"es"
function displayImg(){
	// récupération des fichiers présents dans "files"
	$imgArray = scandir("files/");
	// suprresion des champs ".", ".."" et ".DS STORE"
	unset($imgArray[0], $imgArray[1], $imgArray[2]);
	// génération de tag <img>
	foreach ($imgArray as $imgFile) {
		echo "<div class='grid-item'> <img src='files/" . $imgFile . "'/> </div>";
	}
}

?>