<style>
	.sidebar{
		position: fixed;
		top: 0;
		left: 0;
		width: 18vw;
		height: 100vh;
		background: #131013;
	}
	.sidebar .content{
		padding: 40px;
	}
	.sidebar .top{
		text-align: center;
		padding-bottom: 30px !important;
		margin-bottom: 20px !important;
		border-bottom: 1px solid #ffffff05;
	}
	.sidebar .logo{
		width: 50%;
	}
	.sidebar .social{
		padding: 10px;
		background: #FFFFFF05;
		border-radius: 15px;
		margin-top: 40px;
	}
	.sidebar .photo{
		width: 100%;
		padding-bottom: 100%;
		background-size: cover !important;
		background-position: center center !important;
		border-radius: 10px;
	}
	.sidebar .name{
		text-align: left !important;
	}
	.sidebar .sideLink{
		cursor: pointer;
		padding: 20px;
		border-radius: 15px;
		background: #FFFFFF06;
		margin-bottom: 15px;
		color: white;
		font-weight: 300 !important;
	}
	.sideLink label{
		cursor: pointer;
	}
	.sidebar .logout{
		position: absolute;
		width: 18vw;
		bottom: 0px;
		left: 0;
		padding: 20px;
		background: #ffffff03;
		color: #ffffff50 !important;
	}
</style>

<div class="sidebar">
	<div class="content">
		<div class="top">
			<img class="logo" src="../assets/img/logo.svg">
			<div class="social">
				<div class="row">
					<div class="col-4">
						<div style="background: url('../assets/img/no-picture.jpg');" class="photo"></div>
					</div>
					<div class="col-8 name">
						<label class="align"><?php echo $_SESSION['nome']; ?></label>
					</div>
				</div>
			</div>
		</div>

		<a href="../gestao">
			<div class="sideLink">
				<div class="row">
					<div style="text-align: right !important;" class="col-3">
						<i class="fa-solid fa-list-check align"></i>
					</div>
					<div class="col-9">
						<label class="align">Gestão</label>
					</div>
				</div>
			</div>
		</a>

		<a href="../ambientes">
			<div class="sideLink">
				<div class="row">
					<div style="text-align: right !important;" class="col-3">
						<i class="fa-solid fa-arrow-up-from-bracket align"></i>
					</div>
					<div class="col-9">
						<label class="align">Ambientes</label>
					</div>
				</div>
			</div>
		</a>

		<a href="../relatorios">
			<div class="sideLink">
				<div class="row">
					<div style="text-align: right !important;" class="col-3">
						<i class="fa-solid fa-chart-pie align"></i>
					</div>
					<div class="col-9">
						<label class="align">Relatórios</label>
					</div>
				</div>
			</div>
		</a>

		<a href="../configuracoes">
			<div class="sideLink">
				<div class="row">
					<div style="text-align: right !important;" class="col-3">
						<i class="fa-solid fa-gear align"></i>
					</div>
					<div class="col-9">
						<label class="align">Configurações</label>
					</div>
				</div>
			</div>
		</a>

		<a href="../app/actions/logout.php">
			<div class="logout">
				<center>
					<label style="cursor: pointer;"><i style="margin-right: 5px;" class="fa-solid fa-arrow-right-from-bracket"></i> Sair</label>
				</center>
			</div>
		</a>

	</div>
</div>