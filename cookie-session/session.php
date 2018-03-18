<?php
	session_start();
	$user=($_POST['username']);
	$pass=($_POST['password']);
	$valid_user='netizen';
	$valid_pass='pabw';
	
	if ($user==$valid_user and $pass==$valid_pass) {
		$_SESSION['login'] = true;
			 $_SESSION['username'] = $user;
		header('Location: welcome.php');
	} else {
		echo "Username atau Password salah";
	}
?>