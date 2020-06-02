<html>
	<head>
		<title>Criar Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<style>
body{
	background-color: #E0EEE0;
	padding:50px;
	}

.panel h2{
	color:#444444;
	font-size:20px;
	margin:0 0 12px 0;
	}
.panel p {
	color:#777777;
	font-size:14px;
	margin-bottom:30px;
	line-height:24px;
	}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
  }
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
  }
.login-form .form-group {
  margin-bottom:10px;
  }
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
  }
.login-form  .btn.btn-primary {
  background: #1E90FF none repeat scroll 0 0;
  border-color: #1E90FF;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
  }
.forgot {
  text-align: left;
  margin-bottom:30px;
  }
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
  }
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
  }
.back {
	text-align: left;
	margin-top:10px;
	}
.back a {
	color: #444444;
	font-size: 13px;
	text-decoration: none;
	}
		</style>
	</head>
	
	<body>
		<form method="post" action="cod_insert-login.php.php" id="formlogin" name="formlogin" >
		<div class="container">
		<div class="login-form">
			<div class="main-div">
				<div class="panel">
				<h2>Criar Login</h2>
				<p>Para você visualizar processos</p>
				</div>
				<form id="Login">
					<div class="form-group">
					<input class="form-control" placeholder="Nome" name="login" type="text" required>
					</div>
					<div class="form-group">
					<input class="form-control" placeholder="Senha" name="senha" type="password" maxlength="8" required>
					</div>
					<button type="submit" class="btn btn-primary">Criar</button>
				</form>
			</div>	
		</div>
		</div>
	</body>
</html>
