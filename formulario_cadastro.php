<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Formulário</title>
		
		<style>		
			body{
			font:100% normal Arial, Helvetica, sans-serif;
			background-color:#B0C4DE;			
			}
			
			div.box h4 {
			color:black;
			padding:auto;
			border-bottom:1px ;
			border-top:1px ;
			}
 
			div.box label {
			width:100%;
			display: block;
			border-top:1px ;
			border-bottom:1px ;
			padding:10px 0 10px 0;
			}
 
			div.box label span {
			display: block;
			color:#000000;
			font-size:12px;
			float:left;
			width:100px;
			text-align:left;
			border-top:1px ;
			border-bottom: 1px;
			padding:5px 20px 0 0;
			}	
 
			div.box .input_text {
			padding:10px 10px;
			width:200px;
			background: #f2f2f2;
			border-bottom: 1px ;
			border-top: 1px ;
			border-left:1px ;
			border-right:1px ;
			}
  
			div.box .button{
			margin:0 0 10px 0;
			padding:4px 7px;
			background:;
			border:0px;
			top:10px;
			left:382px;
			width:100px;
			border-bottom: 1px ;
			border-top: 1px ;
			border-left:1px  ;
			border-right:1px ;
		
			}	
		</style>
		
	</head>
	
	<body>
		<h3>Formulário para Ação Judicial</h1>
		<form name"cadastro" action="cadastrar-form_cod.php" method="post" >
			<div class="box">
			<h4>Dados do Requerente:</h4>
			<label>
				<span>Nome*:</span>
				<input type="text" class="input_text" name="nomeRequerente" id="name" required>
			</label>
			<label>
				<span>Matrícula:</span>
				<input type="text" class="input_text" name="idCadastroRequerente" id="matricula">
			</label>
			<label>
				<span>Endereço*:</span>
				<input type="text"class="input_text" name="enderecoRequerente" id="endereco" required>
			</label>
			<label>
				<span>Advogado do Requerente*:</span>
				<input type="text" class="input_text" name="advRequerente" id="advogado" required>
			</label>

			<label>
				<span>OAB*:</span>
				<input type="text" class="input_text" name="idAdvRequerente" id="oab" maxlength="10" placeholder="ex.:000.000-SP" required>
			</label>

			<h4>Dados do Requerido:</h4>
			<label>
				<span>Nome*:</span>
				<input type="text" class="input_text" name="nomeRequerido" id="name" required>
			</label>	
			<label>
				<span>Endereço*:</span>
				<input type="text"class="input_text" name="enderecoRequerido" id="endereco" required>
			</label>
			<label>
				<span>Advogado do Requerido*:</span>
				<input type="text" class="input_text" name="advRequerido" id="advogado" required>
			</label>
			<label>
				<span>OAB*:</span>
				<input type="text" class="input_text" name="idAdvRequerido" id="oab" maxlength="10" placeholder="ex.:000.000-SP" required>
			</label>

			<h4>Informações do Processo:</h4>		
			<label>
				<span>Número do processo*:</span>
				<input type="text" class="input_text" name="numProcesso" id="NuProcesso" maxlength="25" placeholder="0000000-00.0000.0.00.0000" required>  
			</label>
			<label>
				<span>Assunto*:</span>
				<input type="text" class="input_text" name="assuntoProcesso" id="tipoAcao" required>
			</label>
			<label>
				<span>Área Processual*: </span>			
				<select id="area" name="areaProcessual" style="width:225px;" required>
					<option value="">Selecione</option>
					<option value="Cível">Cível</option>
					<option value="Criminal">Criminal</option>
				</select> 
			</label>				
			<label>
				<span>Distribuição*:</span>
				<input type="text" class="input_text" name="distrProcessual" id="Districuicao" placeholder="ex.:1ª Vara Cível" required>
			</label>
			<label>
				<span>Juiz*: </span>
				<input type="text" class="input_text" name="juiz" id="juiz" required>
			</label>
			<label>
				<span>Outros Números: </span>
				<input type="text" class="input_text" name="outrosProcessos" id="OutrosProcessuais">
			</label>
			<label>
				<span>Status da Ação*: </span>			
				<select id="status" name="statusAcao" style="width:225px;" required>
					<option value="">Selecione</option>
					<option value="Em andamento">Em Andamento</option>
					<option value="Encerrado">Encerrado</option>
				</select> 
			</label>				
			<label>
				<input type="submit" class="button" value="Cadastrar">
			</label>
			</div>
		</form>
		<a href="formulario_busca.php"><button class="btn home">Consultar</button></a>

	</body>	
</html>




