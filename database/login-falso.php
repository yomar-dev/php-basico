<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Introdución a SQL Injection</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Login Falso</h1>		
		<a href="index.php">Inicio</a>

		<form action="login-falso.php" method="post">
			<label for="email">Email</label> <br>
			<input name="email" type="text" id="email" required> <br><br>

			<label for="password">Contraseña</label> <br>
			<input name="password" type="password" id="password" required> <br><br>

			<input type="submit" value="Login">
		</form>

		<h3>Query</h3>
		<div>
			
		</div>


		<h3>Datos del Usuario</h3>
		<div>
			
		</div>
	</div>
</body>
</html>