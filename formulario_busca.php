<html>
	<head>
		<meta charset="utf-8">
		<title>Consultar Processo</title>
		
		<style>
			body{
				font:100% normal Arial, Helvetica, sans-serif;
				background-color: #B0C4DE;
			}
 			div.box label {
				width:100%;
				display: block;
				border-top:1px ;
				border-bottom:1px ;
				padding:10px 0 10px 0;
			}
 			div.box label span {
				font-size: 14px;
				display: block;
				color:#000000;
				float:left;
				width:50px;
				text-align:left;
				border-top:1px ;
				border-bottom: 1px;
				padding:5px 20px 0 0;
			}	
 			div.box .input_text {
				padding:10px 10px;
				width:250px;
				background: #DCDCDC;
				border-bottom: 1px ;
				border-top: 1px ;
				border-left:1px ;
				border-right:1px ;
			}
			table {
  				border: 1px solid #000000;
 				border-collapse: collapse;
   			width: 1000px;
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
		<h4>Pesquisar:</h4>
		<form method="post" action="formulario_busca.php">

		<div class="box">
		<label>
			<span>Nome:</span>
			<input type="text" class="input_text" name="buscar" id="name">
			<input type="submit" value="Buscar" class="button">
		</div>
		</form>
		
		<?php
		include_once ("conectar_cod.php");	

		if (isset($_POST["buscar"])){
			
			$buscar = $_POST['buscar'];
			$select = "SELECT * FROM Juridico WHERE nomeRequerente LIKE '%".$buscar."%'";
			$res = mysqli_query($conn, $select);
			
			echo "<table>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>Registro</th>";
			echo "<th>Alterar</th>";
			echo "<th>Excluir</th>";
			echo "<th>Requerente</th>";
			echo "<th>Matrícula</th>";
			echo "<th>Endereço Requerente</th>";
			echo "<th>Número do Processo</th>";
			echo "<th>Assunto</th>";
			echo "<th>Status da ação:</th>";
			echo "</tr>";
			echo "</thead>";
			
				while($linha = mysqli_fetch_array($res)){
				echo "<tbody>"; 
				echo "<tr>";
				echo "<td align='center'><a href='sobre.php?id={$linha['id']}'><button class='btn sobre'> Consultar </button></a></td>";
				echo "<td align='center'><a href='formulario_alterar.php?id={$linha['id']}'><button class='btn alterar' onclick=\"return confirm('Deseja ALTERAR este registro?'); return false;\">Alt</button></a></td>";
				echo "<td align='center'><a href='delete_cod.php?id={$linha['id']}'><button class='btn excluir' onclick=\"return confirm('Tem certeza que deseja EXCLUIR este registro?'); return false;\">Del</button></a></td>";
				echo "<td>".$linha["nomeRequerente"] ."</td>";
				echo "<td>".$linha["idCadastroRequerente"] ."</td>";
				echo "<td>".$linha["enderecoRequerente"] ."</td>";
				echo "<td>".$linha["numProcesso"] ."</td>";
				echo "<td>".$linha["assuntoProcesso"] ."</td>";
				echo "<td>".$linha["statusAcao"] ."</td>";
				echo "</tr>";
				echo "</tbody>"; 
			}
			echo "</table>";
		}
		?>
			<br>
	</body>
</html>
