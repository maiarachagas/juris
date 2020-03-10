<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Verificar</title>
	<body>
	<?php
	
		include_once ("conectar_cod.php");
	
	$nomeRequerente 			=	$_POST["nomeRequerente"];
	$idCadastroRequerente	=	$_POST["idCadastroRequerente"];
	$enderecoRequerente		=	$_POST["enderecoRequerente"];
	$advRequerente				=	$_POST["advRequerente"];
	$idAdvRequerente			=	$_POST["idAdvRequerente"];
	$numProcesso				=	$_POST["numProcesso"];
	$assuntoProcesso			=	$_POST["assuntoProcesso"];
	$areaProcessual			=	$_POST["areaProcessual"];
	$juiz							=	$_POST["juiz"];
	$outrosProcessos			=	$_POST["outrosProcessos"];
	$distrProcessual			=	$_POST["distrProcessual"];
	$statusAcao					=	$_POST["statusAcao"];
	$nomeRequerido				=	$_POST["nomeRequerido"];
	$enderecoRequerido		=	$_POST["enderecoRequerido"];
	$advRequerido				=	$_POST["advRequerido"];
	$idAdvRequerido			=	$_POST["idAdvRequerido"];
	
	$sql = "INSERT INTO Juridico (nomeRequerente, idCadastroRequerente, enderecoRequerente, advRequerente, idAdvRequerente, numProcesso, assuntoProcesso, areaProcessual, juiz, outrosProcessos, distrProcessual, statusAcao, nomeRequerido, enderecoRequerido, advRequerido, idAdvRequerido) VALUES ('".$nomeRequerente."', '".$idCadastroRequerente."', '".$enderecoRequerente."', '".$advRequerente."', '".$idAdvRequerente."', '".$numProcesso."', '".$assuntoProcesso."', '".$areaProcessual."', '".$juiz."', '".$outrosProcessos."', '".$distrProcessual."', '".$statusAcao."', '".$nomeRequerido."', '".$enderecoRequerido."', '".$advRequerido."', '".$idAdvRequerido."')";
		if ($conn->query($sql)===FALSE){
			echo "Error: " .$sql. "<br>" . $conn->error;
			} else {
				echo "Dados inseridos com sucesso!";
				}
        $conn->close();
        
        echo '<br><a href="formulario_cadastro.php"><button class="btn home">Cadastrar +</button></a>'
        
        ?>

	</body>
</html>