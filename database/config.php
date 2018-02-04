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

$dbHost = "localhost";
$dbName = "cursophp";
$dbUser = "root";
$dbPass = "root";

try{
	$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
	echo $e->getMessage();
}

?>