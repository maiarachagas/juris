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
		<div class="box">
		<table>
		  <caption><h3>Consultar Processo de: <?php echo $nomeRequerente ?> </h3></caption>
			<tr>
				<th>Requerente:</th>
				<td><?php echo $nomeRequerente?></td>
			</tr>
			<tr>
				<th>Matrícula:</th>
				<td><?php echo $idCadastroRequerente?></td>
			</tr>
			<tr>
				<th>Endereço:</th>
				<td><?php echo $enderecoRequerente?></td>
			</tr>
			<tr>
				<th>Advogado do Requerente:</th>
				<td><?php echo $advRequerente?></td>
			</tr>
			<tr>
				<th>OAB:</th>
				<td><?php echo $idAdvRequerente?></td>
			</tr>
			<tr>
				<th>Requerido:</th>
				<td><?php echo $nomeRequerido?></td>
			</tr>
			<tr>
				<th>Endereço:</th>
				<td><?php echo $enderecoRequerido?></td>
			</tr>
			<tr>
				<th>Advogado do Requerido:</th>
				<td><?php echo $advRequerido?></td>
			</tr>
			<tr>
				<th>OAB:</th>
				<td><?php echo $idAdvRequerido?></td>
			</tr>
			<tr>
				<th>Numero do processo:</th>
				<td><?php echo $numProcesso?></td>
			</tr>
			<tr>
				<th>Assunto:</th>
				<td><?php echo $assuntoProcesso?></td>
			</tr>
			<tr>
				<th>Área:</th>
				<td><?php echo $areaProcessual?></td>
			</tr>
			<tr>
				<th>Distribuição</th>
				<td><?php echo $distrProcessual?></td>
			</tr>
			<tr>
				<th>Juiz:</th>
				<td><?php echo $juiz?></td>
			</tr>
			<tr>
				<th>Outros Numeros Processuais:</th>
				<td><?php echo $outrosProcessos?></td>
			</tr>
			<tr>
				<th>Status da Ação:</th>
				<td><?php echo $statusAcao?></td>
			</tr>
		</table>
		</div>
	</body>	
	<footer>
		<a href="formulario_busca.php"><button class="btn buscar">voltar</button></a>
	</footer>
</html>

