<html>
	<head>
		<title></title>
		<style>
body{
			font:100% normal Arial, Helvetica, sans-serif;
			background-color:#B0C4DE;			
			}		
		
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
  			echo "Login ou senha errado. Tente novamente.<br/>";
 		}

?>	
