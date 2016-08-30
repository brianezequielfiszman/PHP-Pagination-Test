<?php
/**
 * Created by PhpStorm.
 * User: Chuck
 * Date: 5/11/2016
 * Time: 11:18 PM
 */

// Obtiene los datos para conectarse a la DB desde el archivo
$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/../" . "config.ini");

$host = $config["host"];
$user = $config["user"];
$password = $config["password"];
$db = $config["db"];
$table = $config["table"];

$conn = mysqli_connect($host, $user, $password, $db);
?>
