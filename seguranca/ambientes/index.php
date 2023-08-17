<?php 

	require "../app/functions/authFunctions.php";

	ifSession();
	isLoged($_SESSION['id']);

	require "../app/vars.php";
	require "../app/cdn.php";

	$page_name = 'Ambientes';

	require "../app/leftbar.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $page_name . ' | ' . $app_name; ?></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/ambientes.css">
</head>
<body>
	<div class="midContent">
		<div class="row">
			<div class="col-3">
				<a style="text-decoration: none; color: #FFF;" href="#">
					<div class="module">
						<img class="image" src="../assets/img/ambientes/1.jpg">
						<div class="content">
							<div class="row">
								<div class="col-10">
									<p class="align">Ambiente 1</p>
								</div>
								<div class="col-2">
									<i class="fa-regular fa-eye align"></i>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-3">
				<a style="text-decoration: none; color: #FFF;" href="#">
					<div class="module">
						<img class="image" src="../assets/img/ambientes/2.jpg">
						<div class="content">
							<div class="row">
								<div class="col-10">
									<p class="align">Ambiente 2</p>
								</div>
								<div class="col-2">
									<i class="fa-regular fa-eye align"></i>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-3">
				<a style="text-decoration: none; color: #FFF;" href="#">
					<div class="module">
						<img class="image" src="../assets/img/ambientes/3.jpg">
						<div class="content">
							<div class="row">
								<div class="col-10">
									<p class="align">Ambiente 3</p>
								</div>
								<div class="col-2">
									<i class="fa-regular fa-eye align"></i>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-3">
				<a style="text-decoration: none; color: #FFF;" href="#">
					<div class="module">
						<img class="image" src="../assets/img/ambientes/4.jpg">
						<div class="content">
							<div class="row">
								<div class="col-10">
									<p class="align">Ambiente 4</p>
								</div>
								<div class="col-2">
									<i class="fa-regular fa-eye align"></i>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</body>
</html>