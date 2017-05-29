<?php

function uploadImg(){
	global $imgTmp;
	global $imgName;
	$fileOK = move_uploaded_file($imgTmp, "files/". $imgName);
	echo $imgTmp;
	echo "c'est uploadé";
}

function displayImg(){

}

?>