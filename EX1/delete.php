<?
	require "config.php";

	$name = $_POST[name];

	$sql = "delete from basket where name = '".$name."'";

	mysqli_query($connect, $sql);