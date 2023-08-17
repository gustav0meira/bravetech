<?php 

	require "../../app/conn.php";
	require "../../app/vars.php";
	require "../../app/cdn.php";

?>

<script>
setTimeout(function() {
  window.location.href = "./";
}, 2000);
</script>


<style>
	div.loading{
		position: fixed;
		width: 100vw;
		height: 100vh;
		background: #8774e1;
	}
	.centerAlign{
		font-size: 5rem !important;
		position: absolute;
		text-align: center;
		top: 50%;
		left: 50%;
		transform: translate3d(-50%, -50%, 0px);
	}
	.displayNone{
		display: none !important;
	}
</style>

<div id="loading" class="loading">
	<div class="centerAlign">
		<i style="margin-bottom: 20px;" class="fa-solid fa-circle-check"></i>
		<h1>Sucesso!</h1>
		<p style="font-size: 1rem !important; color: #FFFFFF70;">Mensagens disparadas com sucesso!</p>
	</div>
</div>