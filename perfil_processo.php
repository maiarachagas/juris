<?php
		include_once ("cod_conexao-bd.php");
		
 $id = $_REQUEST['id'];
 $sql = "SELECT * FROM Juridico WHERE id=$id";
 $res = mysqli_query($conn, $sql);
 $linha = mysqli_fetch_array($res);
 
 	$nomeRequerente 		=	$linha["nomeRequerente"];
	$idRequerente			=	$linha["idRequerente"];
	$enderecoRequerente		=	$linha["enderecoRequerente"];
	$advRequerente			=	$linha["advRequerente"];
	$idAdvRequerente		=	$linha["idAdvRequerente"];
	$numProcesso			=	$linha["numProcesso"];
	$assuntoProcesso		=	$linha["assuntoProcesso"];
	$areaProcessual			=	$linha["areaProcessual"];
	$juiz					=	$linha["juiz"];
	$outrosProcessos		=	$linha["outrosProcessos"];
	$distrProcessual		=	$linha["distrProcessual"];
	$statusAcao				=	$linha["statusAcao"];
	$nomeRequerido			=	$linha["nomeRequerido"];
	$idRequerido			=	$linha["idRequerido"];
	$enderecoRequerido		=	$linha["enderecoRequerido"];
	$advRequerido			=	$linha["advRequerido"];
	$idAdvRequerido			=	$linha["idAdvRequerido"];
 
?>

<html>
	<head>
	
			<?php 
		session_start();
		if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
		{
  		unset($_SESSION['login']);
  		unset($_SESSION['senha']);
  		header('location:login_adv.php');
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
		body {
			overflow-x: hidden;
			font-family: 'Roboto', sans-serif;
			font-size: 16px;
			background-color: #F5F5F5;
			margin-top: 0;
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
		input.hidden {
			position: absolute;
			left: -9999px;
		}
		
		#profile-image {
			width: 100px;
			height: 100px;
			border:2px solid #03b1ce;
		}
		.tital{
			font-size:16px;
			font-weight:500;
			color: #8B8989;
		}
		
		.info {
			font-size:16px;
		}	
			
		.bot-border{
			border-bottom:1px #f8f8f8 solid; 
			margin:5px 0  5px 0
		}
		
		.bot-border-menu{
			border-bottom:2px #DCDCDC solid; 
			margin:5px 0  10px 0px;
		}			
		#botao{ text-align: right }	


			
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
		<div class="container">
		<div class="row">
        <div class="col-md-7 ">
		<div class="panel panel-default">
		<div class="panel-heading"><h2 style="font-weight: 600; text-align:center; color:#1E90FF" >Processo</h2></div>
		<div class="panel-body">
 		<div class="box box-info">
		<div class="box-body">
		
		<div class="col-sm-6">
			<div  align="center">
				<img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image" class="img-circle img-responsive"> 
			</div>
		</div>
		
		<br>
		<div class="col-sm-6">
		<h3 style="color:#00b1b1;"><?php echo $nomeRequerente ?> </h3>
			<span><i class="glyphicon glyphicon-phone"></i> (11) 9xxxx-xxxx</span>
		</div>
		<br>
		<div class="clearfix"></div>
		<div class="bot-border-menu"></div>
	
		<div class="col-sm-5 col-xs-6 tital">Número do Processo: </div>
		<div class="col-sm-7 info"> <?php echo $numProcesso?> </div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">Assunto: </div>
		<div class="col-sm-7 info"> <?php echo $assuntoProcesso?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">Área Processual:  </div>
		<div class="col-sm-7 info"> <?php echo $areaProcessual ?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">Vara: </div>
		<div class="col-sm-7 info"> <?php echo $distrProcessual ?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">Juiz: </div>
		<div class="col-sm-7 info"><?php echo $juiz ?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">Processos Vinculados: </div>
		<div class="col-sm-7 info"><?php echo $outrosProcessos ?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">Status da Ação: </div>
		<div class="col-sm-7 info"><?php echo $statusAcao ?></div>
		<div class="clearfix"></div>
		<div class="bot-border1"></div>
		
		<div class="col-sm-5 col-xs-6 tital">Nome: </div>
		<div class="col-sm-7 info"> <?php echo $nomeRequerente ?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">CPF: </div>
		<div class="col-sm-7 info"> <?php echo $idRequerente ?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">Endereço:  </div>
		<div class="col-sm-7 info"> <?php echo $enderecoRequerente ?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">Advogado: </div>
		<div class="col-sm-7 info"> <?php echo  $advRequerente?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">OAB: </div>
		<div class="col-sm-7 info"> <?php echo  $idAdvRequerente?></div>
		<div class="clearfix"></div>
		<div class="bot-border1"></div>
		
		<div class="col-sm-5 col-xs-6 tital">Nome do Réu: </div>
		<div class="col-sm-7 info"> <?php echo $nomeRequerido ?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">CPF/CNPJ: </div>
		<div class="col-sm-7 info"> <?php echo $idRequerido ?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">Endereço: </div>
		<div class="col-sm-7 info"> <?php echo $enderecoRequerido ?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">Advogado do réu: </div>
		<div class="col-sm-7 info"> <?php echo $advRequerido ?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		
		<div class="col-sm-5 col-xs-6 tital">OAB: </div>
		<div class="col-sm-7 info"> <?php echo $idAdvRequerido ?></div>
		<div class="clearfix"></div>
		<div class="bot-border"></div>
		<br>
		<div id=botao>
		<?php echo "<a href='file_upload.php?id={$linha['id']}'><button class='btn btn-primary'> Adicionar Documento </button></a>" ?>
		</div>
		
		</div>
		</div>
		</div> 
		</div>
		</div>  
		</div>
		</div>
    </div>
	</body>
</html>


