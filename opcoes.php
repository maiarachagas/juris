<html>
	<head>
	
		<?php 
		session_start();
		if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
		{
  		unset($_SESSION['login']);
  		unset($_SESSION['senha']);
  		header('location:login_restrito.php');
  		}
 
		$logado = $_SESSION['login'];
		?>
		
		<title>Home</title>		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		
		<style>
		body {
			overflow-x: hidden;
			font-family: 'Roboto', sans-serif;
			font-size: 16px;
			}

		/* Toggle Styles */
		#viewport {
			padding-left: 250px;
			-webkit-transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			transition: all 0.5s ease;

			}
		#content {
			width: 100%;
			position: relative;
			margin-left: 100px;
			}

		/* Site Heading */
		.site-heading h3{
			font-size : 40px;
			margin-bottom: 10px;
			font-weight: 600;
			}
		.site-heading p{
			font-size : 16px;
			font-style: italic;
			margin-bottom: 10px;
			}
		.border {
			background: #e8e8e8 ;
			height: 1px;
			width: 40%;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 45px;
			float:left;
			}

		/* Feature-CSS */
		.icon {
			color : #fff;
			font-size:30px;
			padding:15px;
			background:#323232 ;
			border-radius:50px;
			border:1px solid #323232 ;
			}
		.feature-box {
			text-align: center;
			padding: 20px;
			transition: .5s;
			margin-bottom: 30px;
			border: 1px solid #e8e8e8;
			}
		.feature-box:hover {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
		.feature-box h4 {
			font-size: 20px;
			font-weight: 600;
			margin: 25px 0 15px;
			}
		.feature-box p {
			font-size: 12px;
			margin: 25px 0 15px;
			}

		/* Sidebar Styles */
		#sidebar {
			z-index: 1000;
			position: fixed;
			left: 250px;
			width: 250px;
			height: 100%;
			margin-left: -250px;
			overflow-y: auto;
			background: #37474F;
			-webkit-transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			transition: all 0.5s ease;
			}
		#sidebar header {
			background-color: #263238;
			font-size: 20px;
			line-height: 52px;
			text-align: center;
			}
		#sidebar header a {
			color: #fff;
			display: block;
			text-decoration: none;
			}
		#sidebar header a:hover {
			color: #fff;
			}
		#sidebar .nav{
			}
		#sidebar .nav a{
			background: none;
			border-bottom: 1px solid #455A64;
			color: #CFD8DC;
			font-size: 14px;
			padding: 16px 24px;
			}
		#sidebar .nav a:hover{
			background: none;
			color: #ECEFF1;
			}
		#sidebar .nav a i{
			margin-right: 16px;
			}
		.open .dropdown-toggle {
			color: white;
			background-color: #6495ED !important;
		}
		.dropdown-menu li a {
			color: #000000 !important;
		}
		.dropdown-menu li a:hover {
			background-color: #6495ED !important;
		}
			
		</style>
	</head>
	<body>
	<!--Menu esquerdo-->
		<div id="viewport">
			<div id="sidebar">
			<header>
			<span class="glyphicon glyphicon-user icon"></span>
			<a href=""><?php echo "Olá $logado"; ?></a>
			</header>
			<ul class="nav">
				<li><a href="#">HOME</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
					<li><a href="login_cadastrarCliente.php">Criar login cliente</a></li>
					<li><a href="#">Visualizar logins</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVIÇOS
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
					<li><a href="formulario_cadastro.php">Cadastrar</a></li>
					<li><a href="formulario_busca.php">Consultar</a></li>
					<li><a href="Calendario/agenda.php">Agenda</a></li>
					<li><a href="add_arquivos.php">Documentos</a></li>
					</ul>
				</li>
				<li><a href="#">LOGOUT</a></li>
			</ul>
			</div>
			
 <!-- Content -->
		<div id="content">
			<div class="Features-section paddingTB60 ">
			<div class="container">
			<div class="row">
			<div class="col-md-12 site-heading ">
				<h3>Serviços</h3>
				<p>Aqui você poderá cadastrar seus processos, petições, iniciais, procurações e muito mais...</p>
				<div class="border"></div>
			</div>
			</div>
			<div class="row">
				<div class="col-6 col-sm-4">
					<div class="col-md-12 feature-box">
					<span class="glyphicon glyphicon-ok icon"></span>
					<h4>Cadastrar</h4>
					<p>Adicione informações referente ao processo, como nome das partes, nº do processo, advogados e seus clientes.</p>
					<a href="formulario_cadastro.php"><button type="button" class="btn btn-primary site-btn">Acessar</button></a>
					</div>
				</div>
				<!-- End Col -->
				<div class="col-6 col-sm-4">
					<div class="col-md-12 feature-box">
					<span class="glyphicon glyphicon-list-alt icon"></span>
					<h4>Consultar</h4>
					<p>Consulte seus processos e seus andamentos. </p>
					<a href="formulario_busca.php"><button type="button" class="btn btn-primary site-btn">Acessar</button></a>
					</div>
				</div>
				</div>
				<!-- End Col -->	
			<div class="w-100"></div>
			<div class="row">
				<div class="col-6 col-sm-4">
					<div class="feature-box">
					<span class="glyphicon glyphicon-calendar icon"></span>
					<h4>Agenda</h4>
					<p>Adicione as próximas audiências, prazos e reuniões. </p>
					<a href="Calendario/agenda.php"><button type="button" class="btn btn-primary site-btn">Acessar</button></a>
					</div>
				</div>
				<!-- End Col -->
				<div class="col-6 col-sm-4">
					<div class="col-md-12 feature-box">
					<span class="glyphicon glyphicon-folder-open icon"></span>
					<h4>Documentos</h4>
					<p>Adicione arquivos como procurações, petições, iniciais, andamento de processos e documentos de seu cliente. </p>
				    <a href="add_arquivos.php"><button type="button" class="btn btn-primary site-btn">Acessar</button></a>
					</div>
				</div>
				<!-- End Col -->
			</div>
			</div>
			</div>
		</div>
	</div>
	</body>
</html>



