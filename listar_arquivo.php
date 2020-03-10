<html>
	<head>
		<title>Lista de Arquivos</title>
		<style>
			body{
				font:100% normal Arial, Helvetica, sans-serif;
				background-color: #B0C4DE;
			}
			table {
  				border: 1px solid #000000;
 				border-collapse: collapse;
   			width: 100%;
			}
			table th {
  				border: 1px solid #000000;
  				background:#A4A4A4;
			}		
			table td {
  				border: 1px solid #000000;
  				background: #FAFAFA;
			}	
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
