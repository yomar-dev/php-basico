<?php 

/**
 * Parametro 1: Tipo de DB al que nos queremos conectar, su ubicación y el nombre de la DB.
 * - Tipo de DB: mysql
 * - Ubicación: localhost
 * - Nombre DB: cursophp
 *
 * Parametro 2: Nombre de usuario de la DB (root)
 *
 * Parametro 3: Password (root)
 * @var PDO
 */

try{
	$pdo = new PDO("mysql:host=localhost;dbname=cursophp", "root", "root");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
	echo $e->getMessage();
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Introdución a DB con PHP</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Bases de Datos</h1>

		<ul>
			<li>
				<a href="#">Listar Usuarios</a>
			</li>
			<li>
				<a href="#">Agregar Usuario</a>
			</li>
		</ul>
	</div>
</body>
</html>