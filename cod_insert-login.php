<?php

	include_once ("cod_conexao-bd.php");	
	
	$login	=	$_POST["login"];
	$senha	=	$_POST["senha"];

	$sql = "INSERT INTO usuario (usuario, senha) VALUES ('".$login."', '".$senha."')";
		if ($conn->query($sql)===FALSE){
			echo "Error: " .$sql. "<br>" . $conn->error;
			} else {
				echo 'Usuario cadastrado com sucesso!<br>Acesse seu login: <a href="login_adv.php"><button class="btn acessar login">Acessar Login</button></a>';
				}
        $conn->close();
?>