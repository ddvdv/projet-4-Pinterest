<?php
require "SimpleImage.php";				

// function gérant l'import de fichiers img
function uploader(){
	// si un fichier est uploadé
	if (($_FILES['image']['type']) != ""){

		// Récupération de l'extension de l'image
		// définit des variables moins verbeuses
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];
		$imgType = $_FILES['image']['type'];
		$imgExt = "." . substr($imgType, 6);
		$imgName = basename($_FILES['image']['name'],$imgExt);
		$imgName = str_replace('_', '-', $imgName);

		// vérification du type de fichier image
		if ($imgType == "image/jpeg" OR
			$imgType == "image/gif" OR
			$imgType == "image/png" OR
			$imgType == "image/webp" ){



			// vérification de la taille de fichier (moins de 10mb)
			if ($imgSize < 10000000){
				// Appel à une lib POO externe
				$objImg = new \claviska\SimpleImage();
				$objImg->fromFile($imgTmp);
				$ratio = $objImg->getAspectRatio();
				$imgOrigName =  './files/original/' . $imgName . "_original_" . $imgExt;
				$objImg->toFile($imgOrigName);

				if ($ratio < 0.8){
					$objImg->thumbnail(150,300);
					$imgThumbName = './files/thumbnail/'. $imgName . "_high_" . $imgExt;
				}
				elseif ($ratio > 1.5){
					$objImg->thumbnail(300,150);
					$imgThumbName = './files/thumbnail/'. $imgName . "_wide_" . $imgExt;
				}
				else {
					$reso = $objImg->getWidth();
					if ($reso > 800){
						$objImg->thumbnail(300,300);
						$imgThumbName = './files/thumbnail/'. $imgName . "_big_" . $imgExt;
					}
					else {
						$objImg->thumbnail(150,150);
						$imgThumbName = './files/thumbnail/'. $imgName . "_small_" . $imgExt;
					}
				}

				$objImg->toFile($imgThumbName);
				$msg = "Votre image a bien été uploadée <br>";
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
	$msg = '<p class="alert">' . $msg . '</p>';
	return $msg;
}

// function gérant l'affichage des images stockées"
function displayImg(){
	// récupération des fichiers présents dans "files"
	$imgArray = scandir("files/thumbnail/");
	// suprresion des champs ".", ".."" et ".DS STORE"
	unset($imgArray[0], $imgArray[1], $imgArray[2]);
	shuffle($imgArray);

	function classGetter($imgFile){
		$imgArr = explode("_", $imgFile);
		$format = $imgArr[1];
		if ($format == "small"){
			$class = 'grid-item';
		}
		elseif ($format == "high"){
			$class = "grid-item grid-item--height2";
		}
		elseif ($format == "wide"){
			$class = "grid-item grid-item--width2";
		}
		elseif ($format = "big"){
			$class = 'grid-item grid-item--width2 grid-item--height2';
		}
		else {
			$class = 'grid-item';
		}
		return $class;
	}

	foreach ($imgArray as $imgFile) {
		$div = "<div class='".classGetter($imgFile)."'> 
						<a data-remodal-target='" . $imgFile . "' href='#''>
							<img src='files/thumbnail/" . $imgFile . "'/>
						</a>
					</div>

					<div class='remodal' data-remodal-id='" . $imgFile . "'>
					  <button data-remodal-action='close' class='remodal-close'></button>
						<img src='files/thumbnail/" . $imgFile . "'/> 
					  <p>
					    La description de l'image
					  </p>
					</div>";
		echo $div;


	}
}


?>