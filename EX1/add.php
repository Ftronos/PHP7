<?
	require "config.php";

	$good = $_REQUEST;
	$sql = "select * from basket where name = '".$good['name']."'";

	if (mysqli_fetch_row(mysqli_query($connect, $sql))) {
		$req = "update basket set quantity = quantity + ".$good['quantity']." where name = '".$good['name']."'";
		mysqli_query($connect, $req);
	} else {
		$req = "insert into basket (name, quantity, price) values ('".$good['name']."', '".$good['quantity']."', '".$good['price']."')";
		mysqli_query($connect, $req);
	};