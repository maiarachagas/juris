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
		#content {
			margin-left: 20px;
			width:50%;
			font-size:10px;
			margin-top:0;
			}
		h2 {
			color:#FFD700;
			font-weight: 600;
			margin-left: 80px;
			}
		.content h3{
			font-weight: 600;
			margin-top: 0;
			}
		.border {
			background-color:#FFFF00 ;
			height: 2px;
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
		#botao{ text-align: right}			
		.alt-btn {
			background: #FFD700 none repeat scroll 0 0;
			border-color: #DAA520;
			color: #ffffff;
			font-size: 14px;
			width: 200px;
			height: 50px;
			line-height: 50px;
			padding: 0;
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
				<li><a href="opcoes.php">HOME</a></li>
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
	<h2>Atualização de Dados</h2>
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" name"cadastro" action="cod_alter-form.php" method="post">
                      <fieldset>
                         <div class="form-group">
							<div class="col-md-12 site-heading ">
							<h3>Dados do Autor</h3>
							<div class="border"></div>
							</div>
                            <label class="col-md-4 control-label">Registro</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input name="id" placeholder="Registro" class="form-control" required="true" value="<?php echo $id ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Nome</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input name="nomeRequerente" placeholder="Nome Completo" class="form-control" required="true" value="<?php echo $nomeRequerente ?>" type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">CPF</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input name="idRequerente" placeholder="000.000.000-00" class="form-control" required="true" value="<?php echo $idRequerente ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Endereço</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="enderecoRequerente" placeholder="Endereço" class="form-control" required="true" value="<?php echo $enderecoRequerente ?>" type="text"></div>
                            </div>
                         </div>
                         <!--<div class="form-group">
                            <label class="col-md-4 control-label">Cidade</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="cidadeRequerente" placeholder="Cidade" class="form-control" required="true" value="<?php echo $cidadeRequerente ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Estado</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="estadoRequerente" placeholder="Estado" class="form-control" required="true" value="<?php echo $estadoRequerente ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">CEP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="cepRequerente" placeholder="00000-000" class="form-control" required="true" value="<?php echo $cepRequerente ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							   <input name="emailRequerente" placeholder="Email" class="form-control" required="true" value="<?php echo $emailRequerente ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Telefone Fixo</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
							   <input name="foneRequerente" placeholder="(xx)xxxx-xxxx" class="form-control" required="true" value="<?php echo $foneRequerente ?>" type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">Celular</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
							   <input name="celRequerente" placeholder="(xx)9xxxx-xxxx" class="form-control" required="true" value="<?php echo $celRequerente ?>" type="text"></div>
                            </div>
                         </div>-->
						 <div class="form-group">
                            <label class="col-md-4 control-label">Advogado</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input name="advRequerente" placeholder="Nome Completo do Advogado" class="form-control" required="true" value="<?php echo $advRequerente ?>" type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">OAB</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input name="idAdvRequerente" maxlength="10" placeholder="ex.:000.000-SP" class="form-control" required="true" value="<?php echo $idAdvRequerente ?>" type="text"></div>
                            </div>
                         </div>
						 
						 
						 <div class="form-group">
							<div class="col-md-12 site-heading ">
							<h3>Dados do Réu</h3>
							<div class="border"></div>
							</div>
                            <label class="col-md-4 control-label">Nome</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input name="nomeRequerido" placeholder="Nome Completo" class="form-control" required="true" value="<?php echo $nomeRequerido ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">CPF/CNPJ</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input name="idRequerido" placeholder="CPF ou CNPJ" class="form-control" required="true" value="<?php echo $idRequerido ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Endereço</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="enderecoRequerido" placeholder="Endereço" class="form-control" required="true" value="<?php echo $enderecoRequerido ?>" type="text"></div>
                            </div>
                         </div>
                         <!--<div class="form-group">
                            <label class="col-md-4 control-label">Cidade</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="cidadeRequerido" placeholder="Cidade" class="form-control" required="true" value="<?php echo $cidadeRequerido ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Estado</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="estadoRequerido" placeholder="Estado" class="form-control" required="true" value="<?php echo $estadoRequerido ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">CEP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="cepRequerido" placeholder="00000-000" class="form-control" required="true" value="<?php echo $cepRequerido ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							   <input name="emailRequerido" placeholder="Email" class="form-control" required="true" value="<?php echo $emailRequerido ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Telefone Fixo</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
							   <input name="foneRequerido" placeholder="(xx)xxxx-xxxx" class="form-control" required="true" value="<?php echo $foneRequerido ?>" type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">Celular</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
							   <input name="celRequerido" placeholder="(xx)9xxxx-xxxx" class="form-control" required="true" value="<?php echo $celRequerido ?>" type="text"></div>
                            </div>
                         </div>-->
						 <div class="form-group">
                            <label class="col-md-4 control-label">Advogado</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input name="advRequerido" placeholder="Nome Completo do Advogado" class="form-control" required="true" value="<?php echo $advRequerido ?>" type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">OAB</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input name="idAdvRequerido" maxlength="10" placeholder="ex.:000.000-SP" class="form-control" required="true" value="<?php echo $idAdvRequerido ?>" type="text"></div>
                            </div>
                         </div>

                         <div class="form-group">
						 	<div class="col-md-12 site-heading ">
							<h3>Dados do Processo</h3>
							<div class="border"></div>
							</div>
                            <label class="col-md-4 control-label">Número do Processo</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							   <input name="numProcesso" maxlength="25" placeholder="0000000-00.0000.0.00.0000" class="form-control" required="true" value="<?php echo $numProcesso ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Assunto</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							   <input name="assuntoProcesso" placeholder="Assunto" class="form-control" required="true" value="<?php echo $assuntoProcesso ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Área Processual</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control" name="areaProcessual">
									<option value="<?php echo $areaProcessual ?>">Selecione</option>
									<option value="Cível">Cível</option>
									<option value="Criminal">Criminal</option>
                                  </select>
                               </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Vara</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							   <input name="distrProcessual" placeholder="Vara" class="form-control" required="true" value="<?php echo $distrProcessual ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Juiz</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input name="juiz" placeholder="Nome Completo do Juiz" class="form-control" required="true" value="<?php echo $juiz ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Outros nº do processo</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							   <input name="outrosProcessos" placeholder="" class="form-control" value="<?php echo $outrosProcessos ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Status da ação</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control" name="statusAcao">
									<option value="<?php echo $statusAcao ?>">Selecione</option>
									<option value="Em andamento">Em Andamento</option>
									<option value="Encerrado">Encerrado</option>
                                  </select>
                               </div>
                            </div>
                         </div>
						 <div id=botao>
						<button type="submit" class="btn btn-primary alt-btn">Alterar</button>
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


