<?php
		include_once ("conectar_cod.php");
		
 $id = $_REQUEST['id'];
 $sql = "SELECT * FROM Juridico WHERE id=$id";
 $res = mysqli_query($conn, $sql);
 $linha = mysqli_fetch_array($res);
 
 	$nomeRequerente 			=	$linha["nomeRequerente"];
	$idCadastroRequerente	=	$linha["idCadastroRequerente"];
	$enderecoRequerente		=	$linha["enderecoRequerente"];
	$advRequerente				=	$linha["advRequerente"];
	$idAdvRequerente			=	$linha["idAdvRequerente"];
	$numProcesso				=	$linha["numProcesso"];
	$assuntoProcesso			=	$linha["assuntoProcesso"];
	$areaProcessual			=	$linha["areaProcessual"];
	$juiz							=	$linha["juiz"];
	$outrosProcessos			=	$linha["outrosProcessos"];
	$distrProcessual			=	$linha["distrProcessual"];
	$statusAcao					=	$linha["statusAcao"];
	$nomeRequerido				=	$linha["nomeRequerido"];
	$enderecoRequerido		=	$linha["enderecoRequerido"];
	$advRequerido				=	$linha["advRequerido"];
	$idAdvRequerido			=	$linha["idAdvRequerido"];
 
?>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Formulário</title>
		
		<style>		

		</style>
	</head>
	<body>
		<h3>Alteração de Dados</h1>
		<form action="alterar_cod.php" method="get" >
		<div class="box">
		<h4>Dados do Requerente:</h4>
		<label>
		<span>Registro</span>
		<input type="text" class="input_text" name="id" value="<?php echo $id?>" id="id">
		</label>
		<br>
		<label>
			<span>Nome*:</span>
			<input type="text" class="input_text" name="nomeRequerente" value="<?php echo $nomeRequerente ?>" id="name">
		</label>
		<br>
		<label>
			<span>Matrícula:</span>
			<input type="text" class="input_text" name="idCadastroRequerente" value="<?php echo $idCadastroRequerente ?>" id="matricula">
		</label>
		<br>
		<label>
			<span>Endereço*:</span>
			<input type="text"class="input_text" name="enderecoRequerente" value="<?php echo $enderecoRequerente ?>" id="endereco">
		</label>
		<br>
		<label>
			<span>Advogado do Requerente*:</span>
			<input type="text" class="input_text" name="advRequerente" value="<?php echo $advRequerente ?>"  id="advogado">
		</label>
		<br>
		<label>
			<span>OAB*:</span>
			<input type="text" class="input_text" name="idAdvRequerente" value="<?php echo $idAdvRequerente ?>"  id="oab" maxlength="10" placeholder="ex.:000.000-SP">
		</label>
		<br>
		<h4>Dados do Requerido:</h4>
		<label>
			<span>Nome*:</span>
			<input type="text" class="input_text" name="nomeRequerido" value="<?php echo $nomeRequerido ?>"  id="name" placeholder="ex.:Nome/Empresa">
		</label>
		<br>
		<label>
			<span>Endereço*:</span>
			<input type="text"class="input_text" name="enderecoRequerido" value="<?php echo $enderecoRequerido ?>"  id="endereco">
		</label>
		<br>
		<label>
			<span>Advogado do Requerido*:</span>
			<input type="text" class="input_text" name="advRequerido" value="<?php echo $advRequerido ?>"  id="advogado">
		</label>
		<br>
		<label>
			<span>OAB*:</span>
			<input type="text" class="input_text" name="idAdvRequerido" value="<?php echo $idAdvRequerido ?>"  id="oab"maxlength="10" placeholder="ex.:000.000-SP">
		</label>
		<br>
		<h4>Informações do Processo:</h4>		
		<label>
			<span>Número do processo*:</span>
			<input type="text" class="input_text" name="numProcesso" value="<?php echo $numProcesso ?>"  id="NuProcesso" maxlength="25" placeholder="0000000-00.0000.0.00.0000">  
		</label>
		<br>
     	<label>
			<span>Assunto*:</span>
			<input type="text" class="input_text" name="assuntoProcesso" value="<?php echo $assuntoProcesso ?>"  id="tipoAcao">
		</label>
		<br>
		<label>
			<span>Área Processual*: </span>			
			<select id="area" name="areaProcessual" style="width:225px;" required>
				<option value=""><?php echo $areaProcessual ?></option>
				<option value="Cível">Cível</option>
				<option value="Criminal">Criminal</option>
			</select> 
		</label>
		<br>
		<label>
			<span>Distribuição*:</span>
			<input type="text" class="input_text" name="distrProcessual" value="<?php echo $distrProcessual ?>"  id="Districuicao" placeholder="ex.:1ª Vara Cível">
		</label>
		<br>
		<label>
			<span>Juiz*: </span>
			<input type="text" class="input_text" name="juiz" value="<?php echo $juiz ?>"  id="juiz">
		</label>
		<br>
		<label>
			<span>Outros Números: </span>
			<input type="text" class="input_text" name="outrosProcessos" value="<?php echo $outrosProcessos ?>"  id="OutrosProcessuais">
		</label>
		<br>
			<label>
				<span>Status da Ação*: </span>			
				<select id="status" name="statusAcao" style="width:225px;" required>
					<option value=""><?php echo $statusAcao ?></option>
					<option value="Em andamento">Em Andamento</option>
					<option value="Encerrado">Encerrado</option>
				</select> 
			</label>
		<br>
		<label>
			<input type="submit" class="button" value="Alterar">
		</label>
		</div>
		</form>
		<a href="formulario_busca.php"><button class="btn home">Buscar</button></a>
		<a href="opcoes.php"><button class="btn opcoes">Menu</button></a>
			
	</body>	
</html>