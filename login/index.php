<?php 

	require "../app/vars.php";
	require "../app/cdn.php";

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
	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
</head>
<body>
	<div class="video-background">
		<video autoplay muted loop>
			<source src="../assets/img/login-bg.mp4" type="video/mp4">
		</video>
	</div>
	<div class="col-11 col-sm-10 col-md-6 col-lg-4 mx-auto alignCenter">
		<center>
			<img class="logo" src="../assets/img/logo.svg">
			<h2>Faça Login</h2>
			<?php echo $msg; ?>
		</center>
		<form action="../app/actions/login.php" method="POST">
			<label class="input">E-mail:</label><br>
			<input required type="email" name="email"><br>
			<label class="input">Senha:</label><br>
			<input required type="password" name="senha"><br>
			<button>ENTRAR</button>
		</form>
	</div>
</body>
</html>