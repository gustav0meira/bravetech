<?php 

	require "app/vars.php";
	require "app/cdn.php";

	if (isset($_GET['msg'])) {
		$msg = '<p style="color: #FFFFFF80 !important;">' . $_GET['msg'] . '</p>';
	} else{
		$msg = '<p>Acesse com e-mail e senha e faça login na plataforma.</p>';
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | <?php echo $app_name; ?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">
</head>
<body>
	<div class="video-background">
		<video autoplay muted loop>
			<source src="assets/img/login-bg.mp4" type="video/mp4">
		</video>
	</div>
	<div class="topLogin">
		<a href="./login"><label>Entrar</label></a>
	</div>
	<div class="alignCenter">
		<h1>Segurança 4.0</h1>
		<p>Uma nova forma de salvar vidas e proteger patrimônios!</p>
	</div>
</body>
</html>