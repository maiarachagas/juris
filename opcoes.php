<!DOCTYPE html>
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
	<meta charset="utf-8">
	<title>Home</title>
		
		<style type="text/css">
		header {
			width: 100%;
			position: fixed;
			top: 0;
			left: 0;
			height: 40px;
			text-align: right;
		}
		footer {
			width: 100%;
			position: fixed;
			bottom: 0;
			right: 0;
			height: 20px;
			/*display: flex;*/
			text-align: center;
			background-color: rgba(255, 255, 255, 0.68);			
		}	
		body {
			font:100% normal Arial, Helvetica, sans-serif;
			margin-left:35%;
			margin-right:25%;
			margin-top:10%;
			margin-bottom:10%;
			background:#B0C4DE;
		}

		div.box .btn {
			margin-top:10px;
			margin-bottom:15px;
			text-align: center;
			width:250px;
			height:50px;
			font-size: 18px;
			cursor: pointer;
			display: inline-block;
		}
		div.txt {
			margin-bottom:	10px;
			color:red;	
		}
		
		</style>
	</head>
	<body>
		<header><?php echo "Bem vindo(a) $logado, você está logada!"; ?></header>
			
			<div class="box">
			<a href="formulario_cadastro.php"><button class="btn cadastrar">Cadastrar</button></a>
			<a href="formulario_busca.php"><button class="btn consultarprocesso">Consultar Processo</button></a>
			<a href="Calendario/agenda.php"><button class="btn agenda">Agenda</button></a>
			<a href="add_arquivos.php"><button class="btn repositorio">Arquivo</button></a>
		</div>
		
		<footer>Juris</footer>
	</body>
</html>





