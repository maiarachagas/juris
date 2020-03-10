	<?php
	
		include_once ("conectar_cod.php");
	
	$nome =	$_POST['upload_file'];
	$sql = "INSERT INTO arquivo (arquivo) VALUES ('$nome')";
		if ($conn->query($sql)===FALSE){
			echo "Error: " .$sql. "<br>" . $conn->error;
			} else {
				echo "Dados inseridos com sucesso!";
				}
        $conn->close();