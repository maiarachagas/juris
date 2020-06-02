<html>
	<head>
	
		<?php 
		session_start();
		if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
		{
  		unset($_SESSION['login']);
  		unset($_SESSION['senha']);
  		header('location:cod_select-login.php');
  		}
 
		$logado = $_SESSION['login'];
		?>

		<title>Atualização de Dados</title>	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		
		<style>
		/*Corpo*/
		body{
			overflow-x: hidden;
			font-family: 'Roboto', sans-serif;
			font-size: 16px;
			background-color: #F5F5F5;
			margin-top: 0;
		}
		#viewport{
			padding-left: 250px;
			transition: all 0.5s ease;
			margin-left:20px;
			margin-right:20px;
		}

		/* Menu esquerdo */
		.site-heading h3{
			font-size : 40px;
			margin-bottom: 10px;
			font-weight: 600;
		}

		/* Ícone login */
		.icon{
			color : #fff;
			font-size:30px;
			padding:15px;
			background:#323232 ;
			border-radius:50px;
			border:1px solid #323232 ;
		}

		/* Estilizando menu */
		#sidebar{
			z-index: 1000;
			position: fixed;
			left: 250px;
			width: 250px;
			height: 100%;
			margin-left: -250px;
			overflow-y: auto;
			background: #37474F;
		}
		#sidebar header{
			background-color: #263238;
			font-size: 20px;
			line-height: 52px;
			text-align: center;
		}
		#sidebar header a{
			color: #fff;
			display: block;
			text-decoration: none;
		}
		#sidebar header a:hover{
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
		.open .dropdown-toggle{
			color: white;
			background-color: #6495ED !important;
		}
		.dropdown-menu li a{
			color: #000000 !important;
		}
		.dropdown-menu li a:hover{
			background-color: #6495ED !important;
		}
		
		/*Conteúdo*/
		table{
			border: 1px solid #DCDCDC;
			border-collapse: collapse;
			width: 100%;
		}
		table th{
			border: 2px solid #DCDCDC;
			background-color: #4682B4;
			color: white;
		}		
		table td{
			border: 2px solid #DCDCDC;
   			background: #FFFFFF;
			font-size: 12px;
		}
		a{color: inherit;}		
		
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
				<li><a href="tela_usuario.php">HOME</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
					<li><a href="loginClient_insert.php">Criar login cliente</a></li>
					<li><a href="#">Visualizar logins</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVIÇOS
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
					<li><a href="formulario_insert.php">Cadastrar</a></li>
					<li><a href="formulario_select.php">Consultar</a></li>
					<li><a href="Calendario/agenda.php">Agenda</a></li>
					<li><a href="file_upload.php">Documentos</a></li>
					</ul>
				</li>
				<li><a href="#">LOGOUT</a></li>
			</ul>
			</div>
			
	<!-- Conteudo -->
		<div class = "conteiner">
			<h3>Lista de Arquivos:</h3>
			<?php
				$path = "upload/";
				$diretorio = dir($path);
					
				echo "<div class='table-responsive'>";
				echo "<table class='table'>";
				echo "<thead class='thead-dark'>";
				echo "<tr>";
				echo "<th>Data</th>";
				echo "<th>Nome</th>";
				echo "</tr>";
				echo "</thead>";
			
				while($arquivo = $diretorio -> read()){
					echo "<tbody>"; 
					echo "<tr>";
					echo "<td>". date ("d/m/Y", filemtime($path.$arquivo))."</td>";			
					echo "<td><a href='".$path.$arquivo." 'style='text-decoration:none' >".$arquivo."</a></td>";
					echo "</tr>";
					echo "</tbody>"; 
				}
				echo "</table>";
				$diretorio -> close();
			?>
				</div>
		</div>
	</div>
	</body>
</html>


