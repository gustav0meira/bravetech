<?php 

	require "../../app/conn.php";
	require "../../app/vars.php";
	require "../../app/cdn.php";

	session_start(); if (!isset($_SESSION["usuario_logado"])) { header("Location: https://www.google.com"); exit(); }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Educador | <?php echo $app_name; ?></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
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
			font-size: 0.8rem !important;
		}
		.actions{
			margin-bottom: 15px;
			text-align: right;
		}
		.actions i.button{
			background: #FFFFFF20;
			padding: 15px;
			cursor: pointer;
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
		.wppDisparo{
			background: #00000030;
			padding: 10px 15px;
			cursor: pointer;
			border-radius: 15px;
			margin-left: 13px;
			border: none;
			color: white;
		}
		.stdNovo{
			background: #FFFFFF20;
			padding: 10px 15px;
			cursor: pointer;
			border-radius: 15px;
			margin-left: 13px;
			border: none;
			color: white;
		}
		.profilePP{
			width: 100%;
			border-radius: 15px;
			background-size: cover !important;
			background-position: center center;
		}
		#table{
			font-family: Poppins, Helvetica, Arial !important;
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
				<button onclick="printTable()" class="wppDisparo"><i class="fa-solid fa-print"></i>⠀Imprimir/Salvar</button>
			</div>
		</div>
		<div class="module">
			<div class="row">
				<div class="table-responsive">
					<table id="table" class="table table-dark">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th style="width: 70px;" scope="col">Foto</th>
					      <th scope="col">Código</th>
					      <th scope="col">Nome</th>
					      <th scope="col">Nome da Mãe</th>
					      <th scope="col">Telefone</th>
					      <th scope="col">Celular</th>
					      <th scope="col">Sim/Não</th>
					    </tr>
					  </thead>
					  <tbody>
						<?php
						$consulta = "SELECT * FROM alunos WHERE status != 0";
						$con = $conn->query($consulta) or die($conn->error);
						while($dado = $con->fetch_array()) { ?>
					    <tr>
							<td scope="row"><?php echo $dado['id'] ?></td>
							<td style="text-align: center;">
								<img class="profilePP" src="../../assets/pp/<?php echo $dado['profile_pp'] ?>">
							</td>
							<td><?php echo $dado['codigo'] ?></td>
							<td><?php echo $dado['nome'] ?></td>
							<td><?php echo $dado['nome_mae'] ?></td>
							<td style="text-align: center;">+<?php echo $dado['telefone_01'] ?></td>
							<td style="text-align: center;">+<?php if (empty($dado['telefone_02'])) { echo '--/--'; } else { echo $dado['telefone_02']; } ?></td>
							<td style="text-align: center;">
								<form method="POST" action="changeSts.php" class="disparoForm" style="margin-bottom: 0px !important;">

								<input type="hidden" name="student_id" value="<?php echo $dado['id']; ?>">
								<input type="hidden" name="sts" value="<?php echo $dado['sts_educador']; ?>">

								<input type="checkbox" <?php if ($dado['sts_educador'] == 1) {echo 'checked';} ?> name="sts_educador" style="margin-top: 5px;" data-id="<?php echo $dado['id']; ?>">

								</form>
							</td>

								<script>
								document.addEventListener("DOMContentLoaded", function () {
								const forms = document.querySelectorAll(".disparoForm");
								forms.forEach((form) => {
								const checkbox = form.querySelector("input[name='sts_educador']");
								checkbox.addEventListener("change", function () {
								const id = checkbox.getAttribute("data-id");
								form.submit(); }); }); });
								</script>

					    </tr>
						<?php } ?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<script>
function printTable() {
    const table = document.getElementById('table');
    const newWin = window.open('', 'Print-Window');
    newWin.document.open();
    newWin.document.write('<html><head><title>Print</title></head><body>' + table.outerHTML + '</body></html>');
    newWin.document.close();
    newWin.print();
    newWin.close();
}
</script>
</body>
</html>