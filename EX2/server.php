<?php
	session_start();

	$login = isset($_POST[login])?strip_tags($_POST[login]):"";
	$pass = isset($_POST[pass])?strip_tags($_POST[pass]):"";
	$connect = mysqli_connect("localhost", "root", "", "hw7");

	$res = mysqli_query($connect, "select * from users where login = '$login' and pass = md5('$pass')");

	if (mysqli_num_rows($res) > 0) {
		$_SESSION["auth"] = true;
		$_SESSION["login"] = mysqli_fetch_assoc($res)[login];
		$_SESSION["name"] = mysqli_fetch_assoc($res)[name];
		echo 1;
	} else {
		echo 0;
	}