<?php
/**
 * Created by PhpStorm.
 * User: Chuck
 * Date: 5/12/2016
 * Time: 12:00 AM
 */

//  Traer conexión a la base de datos
require("db_connection.php");

// Trae las capacidades de paginación
include("pagination.php");

$sql = "SELECT * FROM $table LIMIT $index, $limit"; // La siguiente query trae toda la información de producto
$query = mysqli_query($conn, $sql); // La información se guarda en $query
$mat = arrayToMatrix($query); // Se guardan todos los datos de Producto en una matriz
$assoc = arrayToAssoc($mat); // Este Array guarda todos los indices asociativos de $mat


/**
 * @param $query un array devuelto por mysqli_query()
 * @return $mat es la matriz que contiene de forma ordenada todos los registros de la query
 *
 * Esta función devuelve $mat
 */

function arrayToMatrix($query)
{
    // $reg guarda un valor de registro por cada iteración de while
    $i = 0;
    while ($reg = mysqli_fetch_assoc($query)) { // la condición devuelve FALSE cuando no devuelva mas registros
        foreach ($reg as $index => $item) {
            $mat[$i][$index] = $item;
        }
        $i++;
    }
    return $mat;
    /*
    *  Usar el $row = msqli_fetch_assoc($query)
    *  dentro de un while trae un registro por ciclo y lo introduce en el array $reg,
    *  el cual utilizo a en un loop foreach para pasar sus datos en la matriz $mat
   */
}

/**
 * @param $mat es la matriz que recibe las función.
 * @return $assoc es un array que contiene los indices asociativos de $mat.
 *
 * Esta función devuelve los indices asociativos $mat en un array.
 */
function arrayToAssoc($mat)
{
    for ($i = 0; $i <= count($mat[0]) - 1; $i++) {
        $assoc[$i] = array_keys($mat[0])[$i];
    }
    return $assoc;
}

// Libero la memoria ocupada por el resultante de la consulta
mysqli_free_result($query);

// Cierro la conexión con la base de datos
mysqli_close($conn);
?>