<?php
	include 'header_updater.php';
	$kode = $_GET['film'];
	

	unlink($films[$kode]);
	unlink($gambar[$kode]);

	echo "Film telah berhasil dihapus.";
	//header('Location: '.'home_updater.php');
?>