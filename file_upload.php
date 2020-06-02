<?php
 $array_erro = array (
	UPLOAD_ERR_OK 			=> "Arquivo incluido com sucedido.",
	UPLOAD_ERR_INI_SIZE 	=> "O arquivo enviado excede o limite ",
	UPLOAD_ERR_FORM_SIZE 	=> "O arquivo excede o limite de 300MB.",
	UPLOAD_ERR_PARTIAL 		=> "O upload do arquivo foi feito parcialmente.",
	UPLOAD_ERR_NO_FILE 		=> "Nenhum arquivo foi enviado.",
	UPLOAD_ERR_NO_TMP_DIR 	=> "Pasta temporária ausênte.",
	UPLOAD_ERR_CANT_WRITE 	=> "Falha em escrever o arquivo em disco.",
	UPLOAD_ERR_EXTENSION 	=> "Uma extensão do PHP interrompeu o upload do arquivo.",
  );

		include_once ("cod_conexao-bd.php");

	if (isset ($_FILES['arquivo'])){
		$extensao = strtolower (substr($_FILES['arquivo']['name'],-4));
		$arquivo_temporario = $_FILES['arquivo']['tmp_name'];
		$arquivo = basename($_FILES['arquivo']['name']);
		$diretorio = "upload/";
		
	if(move_uploaded_file($arquivo_temporario, $diretorio.$arquivo)){
		$sql = "INSERT INTO arquivo (arquivo, data) VALUES('$arquivo', NOW())";
		mysqli_query($conn, $sql);
		$mensagem = "Arquivo publicado";

	} else {
		$numero_erro = $_FILES['upload_file']['error'];
		$mensagem = $array_erro[$numero_erro];
		}	
	}
?>
<?php 
	session_start();
	if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location:login_adv.php');
  	}
 	$logado = $_SESSION['login'];
?>

<html>
	<head>
		<title>Upload de Arquivos</title>	
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
		body {
			overflow-x: hidden;
			font-family: 'Roboto', sans-serif;
			font-size: 16px;
			background-color: #F5F5F5;
			margin-top: 0;
			margin-left: 80px;
			}
		#viewport {
			padding-left: 250px;
			-webkit-transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			transition: all 0.5s ease;
			}

		/* Menu esquerdo */
		.site-heading h3{
			font-size : 40px;
			margin-bottom: 10px;
			font-weight: 600;
			}

		/* Ícone login */
		.icon {
			color : #fff;
			font-size:30px;
			padding:15px;
			background:#323232 ;
			border-radius:50px;
			border:1px solid #323232 ;
			}

		/* Estilizando menu */
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
		
		/*Conteúdo*/
		#content {
			background-color:  #F5F5F5;
			width:70%;
			font-size:10px;
			}
		.content h3{
			font-weight: 600;
			margin-top: 0;
			}
		.border {
			background: #e8e8e8 ;
			height: 1px;
			width: 100%;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 15px;
			float:left;
			}
		.site-heading h3{
			font-size : 20px;
			text-align: center;
			margin-bottom: 10px;
			font-weight: 600;
			}
		#botao{ text-align: right; }		
		.btn.btn {
			margin-top: 20px;
			height:40px;
			width:100px;
			padding: 0;
			}
		.listar-btn	{
			background: #FFD700;
			border: #DAA520;
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
				<li><a href="tela_usuario">HOME</a></li>
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

	<div id="content">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" action="file_upload.php" method="post" enctype="multipart/form-data">
                      <fieldset>
                         <div class="form-group">
							<div class="col-md-12 site-heading ">
							<h3>Upload de Dados</h3>
								<?php
							if (isset ($mensagem)){
							echo $mensagem;
							echo "<br>";
							}
							?>
							<div class="border"></div>
							</div>
                            <label class="col-md-4 control-label">Arquivo</label>
                            <div class="col-md-8 inputGroupContainer">
							<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-folder-open"></i></span>
							<input type="file" name="arquivo" class="form-control">
							</div>
							</div>
							<div id=botao>
							<button type="submit" class="btn btn-primary" name="enviar">Adicionar</button>
							<a href="file_list.php"><button type="button" class="btn btn-primary listar-btn">Listar Arquivo</button></a>
							</div>
                         </div>
                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>




	</body>
</html>

