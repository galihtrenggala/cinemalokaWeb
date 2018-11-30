<?php
	include 'header_updater.php';
	//echo 'berhasil';
	//var_dump($_POST);
	//var_dump($_FILES['poster']);

	if ($_POST['isEdit?']=='true'){
		$kode =  $_POST['kode'];
		$film = fopen($films[$kode], 'w');
		fwrite($film, $_POST['jfilm']."\r\n");
		fwrite($film, $_POST['genre']."\r\n");
		fwrite($film, $_POST['rating']."\r\n");
		fwrite($film, $_POST['sinopsis']."\r\n");
		fclose($film);
	}
	else{
		$newcode = 9000+count($films)+1;
		echo $newcode.'  ';

		
		$film = fopen('../films/movie'.$newcode.'.txt', 'w');
		fwrite($film, $_POST['jfilm']."\r\n");
		fwrite($film, $_POST['genre']."\r\n");
		fwrite($film, $_POST['rating']."\r\n");
		fwrite($film, $_POST['sinopsis']."\r\n");
		fclose($film);
		

		$target_dir = "../films/images/";
		$target_file = $target_dir . basename($_FILES["poster"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		$gambar = $target_dir.'movie'.$newcode.'.'.$imageFileType;

		//echo $gambar;

	    if (move_uploaded_file($_FILES["poster"]["tmp_name"], $gambar)) {
	        echo "berhasil menambah film";
	    } else {
	        echo "gagal menambah film";
	    }

	}

	//header('Location: '.'home_updater.php');
?>