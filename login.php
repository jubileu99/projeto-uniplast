<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href='css/bootstrap.min.css' rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet" type="text/css">
	<link href='js/bootstrap.js'>
</head>
<body class="body">
	<div class="container">
		<div class="box">
			<h2>Login</h2>
			<hr>
			<div class="box2">
				<form class="form-horizontal" method="POST" action="verifica_login.php">
					<div class="form-group">
						<label for="usuario" class="control-label col-sm-3">Usuario:</label>
						<div class="col-sm-9">
							<input type="text" name="usuario" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label for="usuario" class="control-label col-sm-3">Senha:</label>
						<div class="col-sm-9">
							<input type="password" name="senha" class="form-control" required>
						</div>
					</div>
					<div class="button-group">
						<button class="btn btn-primary" type="submit" style="margin-left:79px;">Entrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>