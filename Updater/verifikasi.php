<?php
	//echo $_POST['uname'];
	//echo $_POST['psw'];

	$sagardon = false;
	if ($_POST['uname']=='admin' && $_POST['psw']=='admin') {
		header('Location: '.'home_updater.php');
	}
	else{
		echo "Username atau Password salah";
	}

	
?>