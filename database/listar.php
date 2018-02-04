<?php 

require_once 'config.php';
$queryResult = $pdo->query("SELECT * FROM users");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Listado de Usuarios</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Listado de Usuarios</h1>
		<a href="index.php">Inicio</a>

		<table class="table">
			<tr>
				<th>Nombre</th>
				<th>Email</th>
				<th>Password</th>
			</tr>

			<?php foreach ($queryResult as $row): ?>

			<tr>
				<td><?= $row["name"]; ?></td>
				<td><?= $row["email"]; ?></td>
				<td><?= $row["password"]; ?></td>
			</tr>

			<?php endforeach; ?>
		</table>
	</div>
</body>
</html>