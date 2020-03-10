<html>
	<head>
		<title>Cadastre-se</title>
		<style>
			body{
			font:100% normal Arial, Helvetica, sans-serif;
			background-color:#F3EDCA;			
			}		
			div.box {
			background: #DCDCDC;
			width:300px;
			height: 300px;
			padding:20px 20px 10px 10px;
			margin-left:32%;
			margin-right:30%;
			margin-top:15%;
			margin-bottom:15%;
			}
			div.box h3{
			text-align: center;
			font-size: 16px;			
			}
 			div.box input {
			padding:10px 10px;
			width:300px;
			margin-bottom:15px;
			}		
			a:link{
			text-decoration:none;
			} 
		</style>
	</head>
	<body>
		<form method="post" action="login_insert.php" id="formlogin" name="formlogin" >
			<div class="box">
			<h3>Cadastre-se</h3>
			<label> Usuário:
			<input type="text" name="login" id="login" placeholder="Digite um nome para usuário" required>
			</label>			
			
			<label>Senha:
			<input type="password" name="senha" id="senha" maxlength="8" placeholder="Digite uma senha" required>
			</label>
			
			<label>
			<input type="submit" value="Cadastrar">
			</label>
			<a href='index.php'>Acessar Cadastro</a>
			</div>
		</form>
	</body>
</html>

