<?php
 $array_erro = array (
	UPLOAD_ERR_OK 			=> "Arquivo incluido com sucedido.",
	UPLOAD_ERR_INI_SIZE 	=> "O arquivo enviado excede o limite ",
	UPLOAD_ERR_FORM_SIZE 	=> "O arquivo excede o limite de 300MB.",
	UPLOAD_ERR_PARTIAL 		=> "O upload do arquivo foi feito parcialmente.",
	UPLOAD_ERR_NO_FILE 		=> "Nenhum arquivo foi enviado.",
	UPLOAD_ERR_NO_TMP_DIR 	=> "Pasta temporária ausênte.",
	UPLOAD_ERR_CANT_WRITE 	=> "Falha em escrever o arquivo em disco.",
	UPLOAD_ERR_EXTENSION 	=> "Uma extensão do PHP interrompeu o upload do arquivo.",
  );

	include_once ("conectar_cod.php");

	if (isset ($_FILES['arquivo'])){
		$extensao = strtolower (substr($_FILES['arquivo']['name'],-4));
		$arquivo_temporario = $_FILES['arquivo']['tmp_name'];
		$arquivo = basename($_FILES['arquivo']['name']);
		$diretorio = "upload/";
		
	if(move_uploaded_file($arquivo_temporario, $diretorio.$arquivo)){
		$sql = "INSERT INTO arquivo (arquivo, data) VALUES('$arquivo', NOW())";
		mysqli_query($conn, $sql);
		$mensagem = "Arquivo publicado";

	} else {
		$numero_erro = $_FILES['upload_file']['error'];
		$mensagem = $array_erro[$numero_erro];
		}	
	}
		
	
?>
<html>
	<head>
		<title>Upload de Arquivo</title>
		<style>


		</style>
	</head>
	<body>
		<h2>Upload de Arquivos</h2>
		<?php
			if (isset ($mensagem)){
			echo $mensagem;
			echo "<br>";
			}
		?>
		<form action="add_arquivos.php" method="post" enctype="multipart/form-data">
			<input type="file" name="arquivo">
			<input type="submit" name="enviar" value="Adicionar">
		</form>
		<a href="listar_arquivo.php"><button class="btn list">Listar</button></a>
		<a href="opcoes.php"><button class="btn opcoes">Menu</button></a>
	</body>
</html>