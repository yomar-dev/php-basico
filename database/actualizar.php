<?php 

require_once'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id=:id";
$query = $pdo->prepare($sql);
$query->execute([
	'id' => $id
]);

$row = $query->fetch(PDO::FETCH_ASSOC);
$nombre = $row["name"];
$email = $row["email"];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Actualizar Usuario</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Actualizar Usuario</h1>
		<a href="listar.php">Atras</a>

		<form action="actualizar.php" method="post" accept-charset="utf-8">
			<label for="text">Nombre</label> <br>
			<input name="name" type="text" id="text" value="<?= $nombre; ?>" required> <br><br>

			<label for="email">Email</label> <br>
			<input name="email" type="email" id="email" value="<?= $email; ?>" required> <br><br>

			<input type="submit" value="Actualizar">
		</form>
	</div>
</body>
</html>