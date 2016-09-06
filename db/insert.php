<?php
/**
 * Created by PhpStorm.
 * User: Brian
 * Date: 5/11/2016
 * Time: 11:16 PM
 */

//  Traer conexión a la base de datos
require("db_connection.php");

// Aquí residen los datos introducidos en el formulario
$name = $_POST['name'];
$price = $_POST['price'];

/*
*   Consulta será utilizada en el codigo para
*   insertar los datos introducidos en la base de datos
*/
$sql = "INSERT INTO " . $table . " (NOMBRE_PRODUCTO, PRECIO_PRODUCTO) VALUES ('" . $name . "'," . $price . ")";

/*
*   Se ejecuta la query en la base de datos,
*   si es exitosa se muestra un mensaje de confirmación,
*   sino se muestra un error
*/
if (mysqli_query($conn, $sql) === TRUE) {
    echo "Se introdujo en la base de datos exitosamente";
} else {
    echo $conn->error;
}

// Se cierra la conexión a la base de datos
mysqli_close($conn);
?>
