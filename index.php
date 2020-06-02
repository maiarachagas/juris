<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<style>
		/*Menu*/
		*{
			margin:0;
			padding:0;
			font-family: "Arial";
		}
		.menu{
			background-color: #4682B4;
			font-size: 14px;
			letter-spacing: 2px;
			width: 100%;
			height: 50px;
		}
		.menu ul{
			list-style: none;
			position: relative;
		}
		.menu ul li{
			width: 200px;
			float: left;
		}
		.menu a{
			padding: 15px;
			display: block;
			text-decoration: none;
			text-align: center;
			background-color: #4682B4;
			color: #FFFFFF;
		}
		.menu ul ul{
			position: absolute;
			visibility: hidden;
		}
		.menu ul li:hover ul{
			visibility: visible;
		}
		.menu a:hover{
			background-color: #6495ED;
			color: #000000;
		}
		.menu ul ul li{
			float: none;
			border-bottom: 1px solid #FFFFFF;
		}
		.dropdown-toggle {
			background-color: #6495ED;
			color: #FFFFFF;
		}
		.dropdown-menu li a {
			color: #000000;
		}
		
		/*Menu Responsivo*/
		label[for="bt_menu"]{
			padding: 5px;
			background-color: #4682B4;
			color: #FFFFFF;
			font-family:"Arial";
			text-align: left;
			font-size: 30px;
			cursor: pointer;
			width: 100%;
			height: 50px;
		}
		#bt_menu{
			display: none;
		}
		label[for="bt_menu"]{
			display: none;	
		}
		@media (max-width: 800px){
		label[for="bt_menu"]{
			display: block;	
		}
		.menu{
			margin-left: -100%;
			transition: all .4s;
		}
		.menu ul li{
			width: 100%;
			float: none;
		}
		.menu ul ul{
			position: static;
			overflow: hidden;
			max-height: 0;
			transition: all .4s;
		}
		.menu ul li:hover ul{
			height: auto;
			max-height: 200px;
		}
		.dropdown-toggle {
			background-color: #6495ED;
			color: #FFFFFF;
		}
		.dropdown-menu li a {
			color: #000000;
		}
		#bt_menu:checked ~ .menu{
			margin-left: 0;
		}
		}
	
		/*Glyphicon(icones)*/
		.logo-small {
			color: #6495ED;
			font-size: 30px;
		}
		</style>
	</head>

	<body>
		<input type="checkbox" id="bt_menu">
		<label for="bt_menu"> &#9776;</label>
		<nav class="menu">		 		  
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ACESSAR LOGIN<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="login_adv.php">Advogado(a)</a></li>
					<li><a href="login_client.php">Cliente</a></li>
				</ul>
			</li>
		</ul>
		</nav>
		
		<br><br>		
		<div class="container-fluid text-center">
		<br><br>
		<h2>O que é Sistema jurídico? Qual sua definição?</h2><br/>
			<p>Sistema jurídico ou legal é o conjunto de normas jurídicas interdependentes, reunidas segundo um princípio unificador.</p>
			<p>Essas regras utilizam uma linguagem prescritiva, cuja finalidade é disciplinar a convivência social. Assim, o direito positivo é um sistema nomoempírico prescritivo, pois objetiva preceituar a conduta dos indivíduos.</p>
			<p>A ciência do direito, por outro lado, é um sistema nomoempírico, teorético ou declarativo, que utiliza linguagem descritiva. Tal ciência se baseia em um axioma que lhe serve de base, possibilitando o seu desenvolvimento, que é a norma fundamental descrita por Hans Kelsen. É esta norma que dá legitimidade à Constituição, sendo um dado que se dá por verdadeiro, sem demonstração, que possibilita o estudo do sistema. </p>	
		<br>
		<h2>SERVIÇOS</h2>
			<p>Aqui você adicionará todos seus processos e não precisará criar mais planilhas para ter controle, todas as informações na palma da mão. Tudo isso de forma online.</p>
		<div class="row">
		  <div class="col-sm-3">
			<span class="glyphicon glyphicon-ok logo-small"></span>
			<h4>Cadastrar Processos</h4>
			<p>Inserir os processos que possuie e seus clientes para melhor controle.</p>
		  </div>
		  <div class="col-sm-3">
			<span class="glyphicon glyphicon-list-alt logo-small"></span>
			<h4>Consultar Processos</h4>
			<p>Relatório de todos os processos, verificar andamento...</p>
		  </div>
		  <div class="col-sm-3">
			<span class="glyphicon glyphicon-calendar logo-small"></span>
			<h4>Adicionar eventos</h4>
			<p>Prazos, Pagamento de Guias, Audiências...</p>
		  </div>
		  <div class="col-sm-3">
			<span class="glyphicon glyphicon-folder-open logo-small"></span>
			<h4>Adicionar Documentos</h4>
			<p>Petições, Páginas do Processo, Procurações...</p>
		  </div>
		</div>
		<br><br>
		</div>
	</body>
</html>