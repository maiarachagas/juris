<html>
	<head>
		<title></title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<style>
		</style>
	</head>
	<body>

	</body>
</html>


<?php 
	session_start();

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	include_once('conectar_cod.php');

	$db= mysqli_select_db($conn, $username);
	$sql = mysqli_query($conn, "SELECT * FROM usuario WHERE usuario = '$login' AND senha = '$senha'") or die (mysqli_error($conn));
		if(mysqli_num_rows ($sql) > 0 ){
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			header('location:opcoes.php');
		}else{
  			unset ($_SESSION['login']);
  			unset ($_SESSION['senha']);
  			echo "<div class='alert alert-danger' role='alert'>Usuário ou senha inválidos. Tente novamente!</div>.<br/>";
 		}	
		
		
		
?>	
