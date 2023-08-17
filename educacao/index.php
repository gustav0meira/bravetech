<?php 

	$page_name = "Dashboard";
	require "app/vars.php";
	require "app/cdn.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
</head>
<body>
	<div class="container">
		<div class="row">
			<div style="text-align: center;" class="col-12">
				<div class="top_content">
					<img class="logo" src="assets/img/logo.svg">
					<p>Bem vindo(a) ao Educação 4.0!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="middle_modules">
					<div class="row">
						<div class="col-3">
							<div class="middle_box">
								<div class="row">
									<div style="text-align: center;" class="col-3">
										<i class="fa-solid fa-building-user align"></i>
									</div>
									<div class="col-8">
										<label class="title_top">Alunos:</label><br>
										<label class="title_bottom">300.820</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="middle_box">
								<div class="row">
									<div style="text-align: center;" class="col-3">
										<i class="fa-solid fa-school align"></i>
									</div>
									<div class="col-8">
										<label class="title_top">Escolas:</label><br>
										<label class="title_bottom">465</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="middle_box">
								<div class="row">
									<div style="text-align: center;" class="col-3">
										<i class="fa-solid fa-utensils align"></i>
									</div>
									<div class="col-8">
										<label class="title_top">Pratos Realizados (Hoje)</label><br>
										<label class="title_bottom">112.817</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="middle_box">
								<div class="row">
									<div style="text-align: center;" class="col-3">
										<i class="fa-solid fa-building-user align"></i>
									</div>
									<div class="col-8">
										<label class="title_top">Alunos Presentes (Hoje)</label><br>
										<label class="title_bottom">278.746</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="middle_box">
								<div class="row">
									<div style="text-align: center;" class="col-3">
										<i class="fa-solid fa-building-user align"></i>
									</div>
									<div class="col-8">
										<label class="title_top">Alunos faltosos:</label><br>
										<label class="title_bottom">2.802</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="middle_box">
								<div class="row">
									<div style="text-align: center;" class="col-3">
										<i class="fa-solid fa-users align"></i>
									</div>
									<div class="col-8">
										<label class="title_top">Alunos desistentes:</label><br>
										<label class="title_bottom">1.172</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="middle_box">
								<div class="row">
									<div style="text-align: center;" class="col-3">
										<i class="fa-solid fa-utensils align"></i>
									</div>
									<div class="col-8">
										<label class="title_top">Pratos otimizados em 2023</label><br>
										<label class="title_bottom">23.820</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="middle_box">
								<div class="row">
									<div style="text-align: center;" class="col-3">
										<i class="fa-solid fa-building-user align"></i>
									</div>
									<div class="col-8">
										<label class="title_top">Escolas com alta evasão</label><br>
										<label class="title_bottom">13</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<center>
					<img id="mtMap" style="width: 300px; margin-top: 20px; cursor: pointer;" src="assets/img/mt-map.png">
				</center>
			</div>
		</div>
		<div id="cuiabaMap" style="display: none; margin-top: 50px;" class="row">
			<div class="col-12">
				<div style="text-align: center;" class="content">
					<div class="row">
						<div class="col-5">
							<div class="map cuiaba"></div>
							<img id="pin" class="pin" src="assets/img/pin.png">
						</div>
						<div class="col-7">
							<div class="school_box">
								<div style="display: none;" id="schoolList" class="school_content">
									<div style="text-align: left !important;" class="school_list">
										<div class="row">
											<div class="col-10">										
												<label class="school_name">Escola Estadual da Polícia Militar Tiradentes</label><br>
												<label class="school_description">Av. Gonçalo Antunes de Barros, 651 - Novo Mato Grosso, Cuiabá - MT, 78058-743</label>
												<br>
												<br>
												<br>
												<p class="school_description">
												»  Alunos: 747<br>
												»  Alunos presentes hoje: 735<br>
												»  Alunos faltantes: 12<br>
												»  Alunos desistentes: 0<br>
												»  Alunos que optaram pela merenda hoje: 424<br>
												»  Pratos otimizados hoje: 323<br>
												»  Comida otimizada em 2023: 2.521 KG<br>
												</p>
											</div>
											<div id="buttonsideAtive" style="text-align: right;" class="col-2">
												<i style="cursor: pointer !important; margin-top: 20px;" class="fa-regular fa-eye"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a target="_blank" href="https://docs.google.com/spreadsheets/d/1INxDlULqV8lJGZFto2gV5S05zMjVkUVnDPOny7DjUSI/edit?usp=sharing"><button class="export"><i class="fa-solid fa-table"></i>   Exportar Dados</button></a>
</body>
<style>
.side::-webkit-scrollbar {
  width: 12px;
}

.side::-webkit-scrollbar-track {
  background: #2e2f31;
}

.side::-webkit-scrollbar-thumb {
  background-color: #404244;
  border-radius: 20px;
  border: 4px solid #2e2f31;
}

.side{
	overflow-y: scroll;
	z-index: 4 !important;
	position: fixed;
	width: 35vw;
	height: 100vh;
	background: #2e2f31 !important;
	top: 0;
	left: -35vw;
	transition: left 0.6s ease;
}

.sideOpen {
  left: 0vw !important;
}

.sideContent{
	padding: 40px;
	padding-left: 55px;
	color: white !important;
	font-weight: 300 !important;
	font-size: 0.8rem !important;
}

.sideLink{
	color: white;
	cursor: pointer;
	font-size: 0.7rem;
	background: #FFFFFF10;
	padding: 15px 10px 15px 10px;
	border-radius: 15px;
	margin-bottom: 15px;
	transition: all 300ms;
}

.sidelink:hover{
	background: #FFFFFF30;
}

.sideLink label,
.sideLink svg{
	cursor: pointer !important;
}

.side hr{
	border-color: #FFFFFF10 !important;
	margin: 20px 0px 20px 0px;
}

.side h5{
	font-weight: 300 !important;
	font-size: 1rem;
	color: #FFFFFF50;
}
</style>

<div class="side" id="sideAtive">
	<div class="sideContent">
		<div class="box_video">
			<div style="margin-bottom: 15px; margin-top: 20px;" class="row">
				<div class="col-12">
					<label class="title_module">#monitoramento</label>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
				    <video class="video_cam" loop controls autoplay muted width="100%">
				        <source src="assets/video/cam-01.mp4" type="video/mp4">
				        Seu navegador não suporta o elemento de vídeo.
				    </video>
				</div>
				<div class="col-6">
				    <video class="video_cam" loop controls autoplay muted width="100%">
				        <source src="assets/video/cam-02.mp4" type="video/mp4">
				        Seu navegador não suporta o elemento de vídeo.
				    </video>
				</div>
				<div class="col-6">
				    <video class="video_cam" loop controls autoplay muted width="100%">
				        <source src="assets/video/cam-03.mp4" type="video/mp4">
				        Seu navegador não suporta o elemento de vídeo.
				    </video>
				</div>
				<div class="col-6">
				    <video class="video_cam" loop controls autoplay muted width="100%">
				        <source src="assets/video/cam-04.mp4" type="video/mp4">
				        Seu navegador não suporta o elemento de vídeo.
				    </video>
				</div>
			</div>
			<div style="margin-bottom: 15px; margin-top: 20px;" class="row">
				<div class="col-12">
					<label class="title_module">#história</label>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<p>
						Criada pelo Decreto 2.364 de 22 de dezembro de 1986, com a seguinte denominação: Escola Estadual de 1º Grau da Policia Militar “Tiradentes”. Apesar do nome, nada a identificava com a Policia Militar, visto que funcionava como uma Escola normal da rede pública de ensino e era dirigida por pessoas civis sem qualquer ligação com a Policia Militar. Durante 03 (três) anos, a Escola funcionou desta maneira.
					</p>
					<a target="_blank" href="https://eetiradentes.faceup.tech/"><button class="enter">ACESSAR PLATAFORMA</button></a>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
var sideAtive = document.getElementById('sideAtive');
var buttonsideAtive = document.getElementById('buttonsideAtive');

buttonsideAtive.addEventListener('click', function() {
  sideAtive.classList.toggle('sideOpen');
});

document.addEventListener('click', function(event) {
  if (!buttonsideAtive.contains(event.target) && !sideAtive.contains(event.target)) {
    sideAtive.classList.remove('sideOpen');
  }
});

// abrir box de informações da escola
var schoolList = document.getElementById('schoolList');
var pin = document.getElementById('pin');

pin.addEventListener('click', function() {
  schoolList.classList.toggle('hide');
});

document.addEventListener('click', function(event) {
  if (!pin.contains(event.target) && !schoolList.contains(event.target)) {
    schoolList.classList.remove('hide');
  }
});

// abrir box de informações da escola
var cuiabaMap = document.getElementById('cuiabaMap');
var mtMap = document.getElementById('mtMap');

mtMap.addEventListener('click', function() {
  cuiabaMap.classList.toggle('hide');
  mtMap.classList.toggle('hidden');
});

document.addEventListener('click', function(event) {
  if (!mtMap.contains(event.target) && !cuiabaMap.contains(event.target)) {
    cuiabaMap.classList.remove('hide');
  	mtMap.classList.remove('hidden');
  }
});
</script>
</html>