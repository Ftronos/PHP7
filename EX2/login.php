<?
	session_start();
	if ($_SESSION[auth]) {
		header("location: index.php");
	}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/theme/css/main.css">
</head>
<body class="login">
<div class="container">
	<div class="row align-items-center">
		<form class="form-group col-md-4 offset-md-4" id="login-form" action="server.php" method="post">
			<label for="login">Ваш логин</label>
			<input type="text" class="form-control" id="login"  name="login" id="login">
			<label for="pass">Ваш пароль</label>
			<input type="password" class="form-control" id="pass"  name="pass" id="pass">
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Войти">
			</div>
			<div class="response"></div>
		</form>
	</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/theme/js/main.js"></script>

</html>