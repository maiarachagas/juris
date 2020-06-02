<?php
	
	include_once ("cod_conexao-bd.php");	
	
	$nomeRequerente 		=	$_POST["nomeRequerente"];
	$idRequerente			=	$_POST["idRequerente"];
	$enderecoRequerente		=	$_POST["enderecoRequerente"];
	$advRequerente			=	$_POST["advRequerente"];
	$idAdvRequerente		=	$_POST["idAdvRequerente"];
	$numProcesso			=	$_POST["numProcesso"];
	$assuntoProcesso		=	$_POST["assuntoProcesso"];
	$areaProcessual			=	$_POST["areaProcessual"];
	$juiz					=	$_POST["juiz"];
	$outrosProcessos		=	$_POST["outrosProcessos"];
	$distrProcessual		=	$_POST["distrProcessual"];
	$statusAcao				=	$_POST["statusAcao"];
	$nomeRequerido			=	$_POST["nomeRequerido"];
	$enderecoRequerido		=	$_POST["enderecoRequerido"];
	$advRequerido			=	$_POST["advRequerido"];
	$idAdvRequerido			=	$_POST["idAdvRequerido"];
	
	$sql = "INSERT INTO Juridico (nomeRequerente, idRequerente, enderecoRequerente, advRequerente, idAdvRequerente, numProcesso, assuntoProcesso, areaProcessual, juiz, outrosProcessos, distrProcessual, statusAcao, nomeRequerido, enderecoRequerido, advRequerido, idAdvRequerido) VALUES ('".$nomeRequerente."', '".$idRequerente."', '".$enderecoRequerente."', '".$advRequerente."', '".$idAdvRequerente."', '".$numProcesso."', '".$assuntoProcesso."', '".$areaProcessual."', '".$juiz."', '".$outrosProcessos."', '".$distrProcessual."', '".$statusAcao."', '".$nomeRequerido."', '".$enderecoRequerido."', '".$advRequerido."', '".$idAdvRequerido."')";
		if ($conn->query($sql)===FALSE){
			echo "Error: " .$sql. "<br>" . $conn->error;
			} else {
				echo "Dados inseridos com sucesso!";
				}
        $conn->close();
        
        echo '<br><a href="formulario_insert.php"><button class="btn home">Cadastrar +</button></a>'
        
?>