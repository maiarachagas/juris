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

		<title>Formulário</title>	
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
			background-color:  #F5F5F5;
			width:50%;
			font-size:10px;
			margin-top:0;
			}
		h2 {
			color:#4682B4;
			font-weight: 600;
			margin-left: 25px;
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
		#botao{ text-align: right }		
		.btn.btn-primary {
			background: #1E90FF none repeat scroll 0 0;
			border-color: #1E90FF;
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
				<li><a href="#">HOME</a></li>
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
	<h2>Formulário</h2>
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" name"cadastro" action="cod_insert-form.php" method="post">
                      <fieldset>
                         <div class="form-group">
							<div class="col-md-12 site-heading ">
							<h3>Dados do Autor</h3>
							<div class="border"></div>
							</div>
                            <label class="col-md-4 control-label">Nome</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input id="fullName" name="nomeRequerente" placeholder="Nome Completo" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">CPF</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input name="idRequerente" class="form-control" placeholder="000.000.000-00" required="true" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Endereço</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input id="addressLine2" name="enderecoRequerente" placeholder="Endereço" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						 <!--<div class="form-group">
                            <label class="col-md-4 control-label">Cidade</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="cidadeRequerente" placeholder="Cidade" class="form-control" required="true" value=" " type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Estado</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="estadoRequerente" placeholder="Estado" class="form-control" required="true" value=" " type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">CEP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="cepRequerente" placeholder="00000-000" class="form-control" required="true" value=" " type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							   <input name="emailRequerente" placeholder="Email" class="form-control" required="true" value=" " type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Telefone Fixo</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
							   <input name="foneRequerente" placeholder="(xx)xxxx-xxxx" class="form-control" required="true" value=" " type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">Celular</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
							   <input name="celRequerente" placeholder="(xx)9xxxx-xxxx" class="form-control" required="true" value=" " type="text"></div>
                            </div>
                         </div>-->
						 <div class="form-group">
                            <label class="col-md-4 control-label">Advogado</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input id="phoneNumber" name="advRequerente" placeholder="Nome Completo do Advogado" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">OAB</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input id="phoneNumber" name="idAdvRequerente" maxlength="10" placeholder="ex.:000.000-SP" class="form-control" required="true" value="" type="text"></div>
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
							   <input name="nomeRequerido" placeholder="Nome Completo" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">CPF/CNPJ</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input name="idRequerido" placeholder="CPF ou CNPJ" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Endereço</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="enderecoRequerido" placeholder="Endereço" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <!--<div class="form-group">
                            <label class="col-md-4 control-label">Cidade</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="cidadeRequerido" placeholder="Cidade" class="form-control" required="true" value=" " type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Estado</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="estadoRequerido" placeholder="Estado" class="form-control" required="true" value=" " type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">CEP</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							   <input name="cepRequerido" placeholder="00000-000" class="form-control" required="true" value=" " type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							   <input name="emailRequerido" placeholder="Email" class="form-control" required="true" value=" " type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Telefone Fixo</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
							   <input name="foneRequerido" placeholder="(xx)xxxx-xxxx" class="form-control" required="true" value=" " type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">Celular</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
							   <input name="celRequerido" placeholder="(xx)9xxxx-xxxx" class="form-control" required="true" value=" " type="text"></div>
                            </div>
                         </div>-->
						 <div class="form-group">
                            <label class="col-md-4 control-label">Advogado</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input id="phoneNumber" name="advRequerido" placeholder="Nome Completo do Advogado" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
						 <div class="form-group">
                            <label class="col-md-4 control-label">OAB</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input id="phoneNumber" name="idAdvRequerido" maxlength="10" placeholder="ex.:000.000-SP" class="form-control" required="true" value="" type="text"></div>
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
							   <input id="fullName" name="numProcesso" maxlength="25" placeholder="0000000-00.0000.0.00.0000" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Assunto</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							   <input id="addressLine1" name="assuntoProcesso" placeholder="Assunto" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Área Processual</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control" name="areaProcessual">
									<option value="">Selecione</option>
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
							   <input id="city" name="distrProcessual" placeholder="Vara" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Juiz</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							   <input id="state" name="juiz" placeholder="Nome Completo do Juiz" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Outros nº do processo</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							   <input id="postcode" name="outrosProcessos" placeholder="" class="form-control" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Status da ação</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group">
                                  <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                  <select class="selectpicker form-control" name="statusAcao">
									<option value="">Selecione</option>
									<option value="Em andamento">Em Andamento</option>
									<option value="Encerrado">Encerrado</option>
                                  </select>
                               </div>
                            </div>
                         </div>
						 <div id=botao>
						<button type="submit" class="btn btn-primary">Criar</button>
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



