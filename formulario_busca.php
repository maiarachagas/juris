<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<style>
		/*.container{
			padding-top: 50px;
			}
		.icon{
			font-size: 20px;
			background-color:  #F5F5F5;
			}
			.input-group-btn{background-color:  #F5F5F5;}
			
			table {
				padding-left: 50px;
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
			*/
			
		</style>
	</head>

	<body>
		<div class="container">
		<div class="row1">
			<h2>Pesquisar</h2>
			<form method="post" action="formulario_busca.php">
				<div class="input-group">
				<input type="text" class="form-control" placeholder="Search" name="buscar">
				<div class="input-group-btn">
				<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search icon"></i></button>
				</div>
				</div>
			</form>
		</div>
	
		
		<?php
		include_once ("conectar_cod.php");	

		if (isset($_POST["buscar"])){
			
			$buscar = $_POST['buscar'];
			$select = "SELECT * FROM Juridico WHERE nomeRequerente LIKE '%".$buscar."%'";
			$res = mysqli_query($conn, $select);
			
			echo "<div class='table-responsive'>";
			echo "<table class='table'>";
			echo "<thead class='thead-dark'>";
			echo "<tr>";
			echo "<th scope='col'>#</th>";
			echo "<th scope='col'>Alterar</th>";
			echo "<th scope='col'>Excluir</th>";
			echo "<th scope='col'>Requerente</th>";
			echo "<th scope='col'>Matrícula</th>";
			echo "<th scope='col'>Endereço Requerente</th>";
			echo "<th scope='col'>Número do Processo</th>";
			echo "<th scope='col'>Assunto</th>";
			echo "<th scope='col'>Status da ação:</th>";
			echo "</tr>";
			echo "</thead>";
			
				while($linha = mysqli_fetch_array($res)){
				echo "<tbody>"; 
				echo "<tr>";
				echo "<td align='center'><a href='sobre.php?id={$linha['id']}'><button class='btn sobre'> Consultar </button></a></td>";
				echo "<td align='center'><a href='formulario_alterar.php?id={$linha['id']}'><button class='btn alterar' onclick=\"return confirm('Deseja ALTERAR este registro?'); return false;\">Alt</button></a></td>";
				echo "<td align='center'><a href='delete-form_cod.php?id={$linha['id']}'><button class='btn excluir' onclick=\"return confirm('Tem certeza que deseja EXCLUIR este registro?'); return false;\">Del</button></a></td>";
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
			</div>
	</body>
</html>
