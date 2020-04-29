<html>
	<head>
		<title>Lista de Arquivos</title>
		<style>

  		</style>
	</head>
	<body>
		<h4>Arquivos Adicionados:</h4>
		<?php
			$path = "upload/";
			$diretorio = dir($path);
			echo "<table>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>Arquivo</th>";
			echo "</tr>";
			echo "</thead>";
			
			while($arquivo = $diretorio -> read()){
				echo "<tbody>"; 
				echo "<tr>";
				echo "<td><a href='".$path.$arquivo."'>".$arquivo."</a></td>";
				echo "</tr>";
				echo "</tbody>"; 
			}
			echo "</table><br>";
			
		$diretorio -> close();
		?>
		<a href="add_arquivos.php"><button class="btn add">Inserir +</button></a>
	</body>
</html>
