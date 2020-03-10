<html>
	<head>
		<title>Login</title>
		<style>
			footer {
			width: 100%;
			position: fixed;
			bottom: 0;
			right: 0;
			height: 20px;
			/*display: flex;*/
			text-align: center;
			background-color: rgba(255, 255, 255, 0.68);			
			}
							
			body{
			font:100% normal Arial, Helvetica, sans-serif;
			background-image: url("images/justica.jpg");			
			}		
				
			div.box {
			background: #DCDCDC;
			width:300px;
			height: 260px;
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
		<form method="post" action="login_open.php" id="formlogin" name="formlogin" >
			<div class="box">
			<h3>Área Restrita</h3>
			<label>
			<input type="text" name="login" id="login" placeholder="Seu usuário" required>
			</label>			
			
			<label>
			<input type="password" name="senha" id="senha" placeholder="Sua senha" required>
			</label>
			
			<label>
			<input type="submit" value="Entrar">
			</label>
			<a href='login_cadastrar.php'>Cadastre-se</a>			
			</div>
		</form>
		<footer>Juris</footer>				
		
	</body>
</html>