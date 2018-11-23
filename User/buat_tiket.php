<?php include 'header.php';?>

<form method="POST" action="menunggu_konfirmasi.php" id='tiket'>
	<input type="text" name="tanggal" value="<?php echo $_POST['tanggal']?>">
	<input type="text" name="jam" value="<?php echo $_POST['jam']?>">
	<?php
	$listKursi = '';
	foreach ($_POST['kursi'] as $kursi) {
	?>
	<div hidden><input type="text" name="kursi[]" value="<?php echo $kursi;?>"></div>

	<?php
	$listKursi .= $kursi.' ';
	}
	?>
	<input type="text" name="email" value="<?php echo $_POST['email']?>">
	<input type="text" name="metode" value="<?php echo $_POST['metode']?>">
	<input type="text" name="rdm" value="<?php echo $_POST['rdm'];?>">
	<input type="submit">
</form>

<?php
$film = fopen($detil[$_POST['kodeFilm']], 'r');

$tiket = fopen('../films/tiket/'.rand(100,999).$_POST["rdm"].'.txt', 'w');
fwrite($tiket, $_POST['kodeFilm']);
fwrite($tiket, "\r\n");
fwrite($tiket, "judul : ".fgets($film));
fwrite($tiket, "genre : ".fgets($film));
fwrite($tiket, "kursi : ".$listKursi."\r\n");
fwrite($tiket, "tanggal : ".$_POST['tanggal']."\r\n");
fwrite($tiket, "jam : ".$_POST['jam']."\r\n");
fwrite($tiket, $_POST['rdm']."\r\n");
?>

<script type="text/javascript">
  document.getElementById("tiket").submit();
</script>