<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agregar Usuario</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Agregar Usuario</h1>
		<a href="index.php">Inicio</a>

		<form action="agregar.php" method="post" accept-charset="utf-8">
			<label for="text">Nombre</label> <br>
			<input name="name" type="text" id="text"> <br><br>

			<label for="email">Email</label> <br>
			<input name="email" type="email" id="email"> <br><br>

			<label for="password">Contraseña</label> <br>
			<input name="password" type="password" id="password"> <br><br>

			<input type="submit" value="Agregar">
		</form>
	</div>
</body>
</html>