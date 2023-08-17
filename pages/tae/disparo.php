<?php 

	require "../../app/conn.php";
	require "../../app/vars.php";
	require "../../app/cdn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$message = $_POST['message'];
	require "../../assets/loading.html";

	$consulta = "SELECT * FROM alunos WHERE status != 0 AND disparo = 1";
	$con = $conn->query($consulta) or die($conn->error);
	while($dado = $con->fetch_array()) { 

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => 'https://app.whatsgw.com.br/api/WhatsGw/Send',
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => '',
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => 'POST',
	  CURLOPT_POSTFIELDS =>'{
	"apikey" : "7aa39629-3c79-4a8e-8ca0-9d3de5f7eecd",
	"phone_number" : '.$phoneNumber.',
	"contact_phone_number" : '.$dado["telefone_01"].',
	"message_custom_id" : "bravetech",
	"message_type" : "text",
	"message_body" : "'.$message.'",
	"check_status" : "1"
	}',
	  CURLOPT_HTTPHEADER => array(
	    'Content-Type: application/json'
	  ),
	));
	$response = curl_exec($curl);

	curl_close($curl);

	}

	header("Location: ./success.php");

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
			background: #ffffff0d;
			margin-bottom: 15px;
			font-size: 0.7rem !important;
			cursor: pointer;
			color: #ffffffb0;
			margin-bottom: 30px !important;
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
			background: #00000030;
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
		.alert{
			font-size: 0.8rem !important;
			color: #FFFFFF50;
		}
		textarea.message{
			width: 100%;
			padding: 15px;
			font-size: 0.8rem !important;
			color: white;
			background: #FFFFFF20;
			border: none;
			border-radius: 15px;
			height: 100px;
		}
		textarea.message::placeholder{
			color: #FFFFFF40;
		}
		button.send{
			width: 100%;
			text-align: center;
			padding: 15px 0px;
			font-size: 0.8rem !important;
			border-radius: 15px;
			background: #00000030;
			color: white;
			border: none;
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
			<div class="col-6">
				<h3>> Disparar mensagens</h3>
			</div>
			<div class="col-6">
				<div class="actions">
					<button form="upadteStudent" class="add"><i class="fa-regular fa-floppy-disk"></i> Salvar</button>
				</div>
			</div>
		</div>
		<div class="module">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-12">
							<label style="margin-bottom: 10px; color: #FFFFFF30;">#mensagens-rápidas</label>
						</div>
						<div class="col-4">
							<p class="quickMessage">Participe das Rematrículas 2024, visite a instituição de ensino.</p>
						</div>
						<div class="col-4">
							<p class="quickMessage">Realize as Matrículas 2024, faça sua escolha através do site.</p>
						</div>
						<div class="col-4">
							<p class="quickMessage">Hoje, os alunos foram dispensados mais cedo.</p>
						</div>
					</div>
				</div>
				<div class="col-12">
					<p>Selecione acima uma mensagem rápida, ou escreva abaixo uma mensagem pesonalizada:</p>
				</div>
				<div class="col-12">
					<div class="row">
						<div class="col-9 col-md-10 col-lg-11">
							<form id="disparo" action="" method="POST">
								<textarea name="message" placeholder="Escreva aqui a sua mensagem personalizada..." class="message"></textarea>
							</form>
						</div>
						<div class="col-3 col-md-2 col-lg-1">
							<button form="disparo" class="send">
								<i class="fa-regular fa-paper-plane"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
		document.addEventListener("DOMContentLoaded", function () {
		  const quickMessages = document.querySelectorAll(".quickMessage");
		  const messageTextarea = document.querySelector(".message");

		  quickMessages.forEach(function (quickMessage) {
		    quickMessage.addEventListener("click", function () {
		      const messageContent = quickMessage.textContent.trim();
		      messageTextarea.value = messageContent; // Define o valor da textarea

		      // Limpa a textarea antes de adicionar o novo valor
		      // messageTextarea.value = ''; 

		      // Role a página para a textarea para que o usuário a veja após clicar
		      messageTextarea.scrollIntoView({ behavior: "smooth" });
		    });
		  });
		});
		</script>
	</div>
</body>
</html>