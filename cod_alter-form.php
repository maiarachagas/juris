<?php
	include_once ("cod_conexao-bd.php");	
	
	$id						=	$_REQUEST["id"];	 
	$nomeRequerente 		=	$_REQUEST["nomeRequerente"];
	$idRequerente			=	$_REQUEST["idRequerente"];
	$enderecoRequerente		=	$_REQUEST["enderecoRequerente"];
	$advRequerente			=	$_REQUEST["advRequerente"];
	$idAdvRequerente		=	$_REQUEST["idAdvRequerente"];
	$numProcesso			=	$_REQUEST["numProcesso"];
	$assuntoProcesso		=	$_REQUEST["assuntoProcesso"];
	$areaProcessual			=	$_REQUEST["areaProcessual"];
	$juiz					=	$_REQUEST["juiz"];
	$outrosProcessos		=	$_REQUEST["outrosProcessos"];
	$distrProcessual		=	$_REQUEST["distrProcessual"];
	$statusAcao				=	$_REQUEST["statusAcao"];
	$nomeRequerido			=	$_REQUEST["nomeRequerido"];
	$idRequerido			=	$_REQUEST["idRequerido"];
	$enderecoRequerido		=	$_REQUEST["enderecoRequerido"];
	$advRequerido			=	$_REQUEST["advRequerido"];
	$idAdvRequerido			=	$_REQUEST["idAdvRequerido"];
	
	$up = "UPDATE Juridico SET nomeRequerente='$nomeRequerente', idRequerente='$idRequerente', enderecoRequerente='$enderecoRequerente', advRequerente='$advRequerente', idAdvRequerente='$idAdvRequerente', numProcesso='$numProcesso', assuntoProcesso='$assuntoProcesso', areaProcessual='$areaProcessual', juiz='$juiz', outrosProcessos='$outrosProcessos', distrProcessual='$distrProcessual', statusAcao='$statusAcao', nomeRequerido='$nomeRequerido', idRequerido='$idRequerido', enderecoRequerido='$enderecoRequerido', advRequerido='$advRequerido', idAdvRequerido='$idAdvRequerido' where id = '$id'";
    mysqli_query($conn, $up);
			if ($conn->query($up)===FALSE){
			echo "Error: " .$up. "<br>" . $conn->error;
			} else {
				echo "Dados alterados com sucesso!";
				}
				$conn->close();
				echo '<br><a href="formulario_select.php"><button class="btn buscar">Voltar</button></a>';
   
?>

