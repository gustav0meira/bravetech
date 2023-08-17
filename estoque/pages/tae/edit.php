<?php 

	require "../../app/conn.php";
	require "../../app/vars.php";
	require "../../app/cdn.php";

	$student_id = $_GET['student'];
	$query = "SELECT * FROM alunos WHERE id = '$student_id'";
	$mysqli_query = mysqli_query($conn, $query);
	while ($data = mysqli_fetch_array($mysqli_query)) { $student = $data; }

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$codigo = $_POST['codigo'];
		$nome = $_POST['nome'];
		$nome_mae = $_POST['nome_mae'];
		$telefone_01 = $_POST['telefone_01'];
		$telefone_02 = $_POST['telefone_02'];

	    $sql = "UPDATE alunos SET codigo = '$codigo', nome = '$nome', nome_mae = '$nome_mae', telefone_01 = '$telefone_01', telefone_02 = '$telefone_02' WHERE id = $student_id";
	    if ($conn->query($sql) === TRUE) {
	        echo "<script>window.location.href='./'</script>";
	    } else { echo "<script>alert('Erro! Contacte o admin!');</script>"; }
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TAE | <?php echo $app_name; ?></title>
	<style>
		body{
			padding-bottom: 50px;
		}
		.module{
			background: #FFFFFF20;
			border-radius: 15px;
			padding: 20px;
		}
		img.logo{
			width: 100%;
			margin: 25px 0;
			border-radius: 100%;
		}
		.quickMessage{
			padding: 10px 15px;
			border-radius: 15px;
			background: #FFFFFF10;
			margin-bottom: 15px;
			font-size: 0.7rem !important;
			cursor: pointer;
		}
		.quickMessage p{
			margin-bottom: 0px !important;
		}
		.messageSend{
			width: 100%;
			border-radius: 10px;
			background: transparent;
			border: 1px solid #FFFFFF30;
			font-size: 0.8rem !important;
			font-weight: 300 !important;
			color: white;
			padding: 10px;
			height: 100% !important;
		}
		.buttonSend{
			padding: 23.5px 0px;
			border: none;
			border-radius: 10px;
			color: white;
			background: #8774e1;
			width: 100% !important;
			text-align: center !important;
			font-size: 0.8rem !important;
			height: 100% !important;
		}
		label.tel{
			width: 100%;
			font-size: 0.8rem !important;
			padding: 10px;
			background: #FFFFFF10;
			margin-bottom: 15px;
			text-align: center !important;
			border-radius: 14px;
		}
		th{
			font-weight: 400 !important;
			color: #FFFFFF70 !important;
		}
		tr, td, th{
			background-color: transparent !important;
			border-color: #ffffff05;
			font-weight: 300;
		}
		.actions{
			margin-bottom: 15px;
			text-align: right;
		}
		.actions i.button{
			background: #FFFFFF20;
			padding: 15px;
			border-radius: 15px;
		}
		td.action i{
			margin-right: 10px;
			color: #FFFFFF80;
			cursor: pointer;
			font-size: 0.8rem !important;
		}
		.align{
			position: relative;
			top: 50%;
			transform: translateY(-50%);
		}
		button.add{
			background: #00000030;
			color: white;
			padding: 10px 15;
			border-radius: 15px;
			border: none;
		}
		input{
			width: 100%;
			padding: 10px;
			border-radius: 15px;
			border: 1px solid #FFFFFF20;
			background: transparent;
			color: white;
		}
		input::placeholder{
			color: #FFFFFF70 !important;
		}
		@media (max-width: 767px) {
			input{
				margin-bottom: 20px;
			}
		}
		.alert{
			font-size: 0.8rem !important;
			color: #FFFFFF50;
			margin-top: 10px;
			padding: 0 10px !important;
		}
		.profilePic{
			width: 100%;
			padding-bottom: 100%;
			background-size: cover !important;
			background-position: center center !important;
			border-radius: 15px;
		}
		@media only screen and (max-width: 768px) {
			#profilePP{
				margin-bottom: 0px !important;
			}
			form{
				margin-bottom: 15px !important;
			}
			.profilePic{
				margin-bottom: 20px !important;
			}
		}
	</style>
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-4 col-md-3 col-lg-1 mx-auto">
				<img class="logo" src="../../assets/img/logo.svg">
			</div>
		</div>
		<div class="row">
			<div class="actions">
				<button form="upadteStudent" class="add"><i class="fa-regular fa-floppy-disk"></i> Salvar</button>
			</div>
		</div>
		<div class="module">
			<form id="upadteStudent" method="POST" action="" style="margin-bottom: 0px !important;">
				<div class="row">
					<div class="col-12 col-md-2 col-lg-2">
						<input placeholder="Código" type="text" name="codigo" value="<?php echo $student['codigo'] ?>">
					</div>
					<div class="col-12 col-md-3 col-lg-3">
						<input placeholder="Nome Completo" type="text" name="nome" value="<?php echo $student['nome'] ?>">
					</div>
					<div class="col-12 col-md-3 col-lg-3">
						<input placeholder="Nome da Mãe" type="text" name="nome_mae" value="<?php echo $student['nome_mae'] ?>">
					</div>
					<div class="col-12 col-md-2 col-lg-2">
						<input placeholder="Telefone" type="text" name="telefone_01" value="<?php echo $student['telefone_01'] ?>">
					</div>
					<div class="col-12 col-md-2 col-lg-2">
						<input placeholder="Celular" type="text" name="telefone_02" value="<?php echo $student['telefone_02'] ?>">
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-12">
					<label style="margin: 20px 0px;">Foto de Perfil</label>
				</div>
				<div class="row">
					<div class="col-12 col-lg-2">
						<div style="background: url('../../assets/pp/<?php echo $student['profile_pp'] ?>');" class="profilePic"></div>
					</div>
					<div class="col-12 col-lg-8">
						<form id="ppForm" action="updatePhoto.php" method="post" enctype="multipart/form-data">
						    <input type="hidden" name="student_id" value="<?php echo $student['id']; ?>">
						    <label for="profilePP">Nova Foto:</label>
						    <input id="profilePP" type="file" name="profile_pp"><br>
						</form>
					</div>
					<div class="col-12 col-lg-2">
						<label>ﾠ</label><br>
						<button form="ppForm" style="width: 100%;" class="add">SALVAR FOTO</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<p class="alert">*O disparo de mensagens será feito para o TELEFONE e não para o CELULAR.</p>
				<p class="alert">*Lembre-se de que o formato do telefone e do celular deve seguir a estrutura "5577999999999". Isso significa que você deve começar com o código do país (55), seguido pelo DDD e, em seguida, pelo número de telefone, sem usar qualquer símbolo, apenas números. Se você utilizar qualquer formato diferente, pode causar problemas no envio de mensagens..</p>
			</div>
		</div>
	</div>
</body>
</html>