<?php 
	session_start();

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	include_once ("cod_conexao-bd.php");

	$db= mysqli_select_db($conn, $username);
	$sql = mysqli_query($conn, "SELECT * FROM usuario WHERE usuario = '$login' AND senha = '$senha'") or die (mysqli_error($conn));
		if(mysqli_num_rows ($sql) > 0 ){
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			header('location:tela_usuario.php');
		}else{
  			unset ($_SESSION['login']);
  			unset ($_SESSION['senha']);
  			echo "<div class='alert alert-danger' role='alert'>Usuário ou senha inválidos. Tente novamente!</div>.<br/>";
 		}	
?>	
