<?php
	include_once ("conectar_cod.php");	

		$id = $_GET['id'];
		$del = "DELETE FROM Juridico WHERE id=$id";
		$res = mysqli_query($conn, $del);
			echo "Cadastro com Id ".$id;
			echo " foi excluído com sucesso!";
			echo '<br><a href="formulario_busca.php"><button class="btn buscar">Voltar</button></a>';
?>