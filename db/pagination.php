<?php
/**
 * Created by PhpStorm.
 * User: Chuck
 * Date: 5/23/2016
 * Time: 10:59 PM
 */
require("db_connection.php");

$limit = 10; // Limite de registros que serán mostrados
$numRows = get_table_count($conn, $table); // La catidad de registros
$pages = get_pages_count($numRows); // La cantidad de paginas que dividen la tabla
$index = get_index($pages, $limit); // El punto desde el cual comenzamos a ver la lista


/**
 * @param $conn especifica la base de datos a la que consultamos
 * @param $table especifica la tabla cuya cantidad de registros obtenemos
 * @return $result es la cantidad de registros de la tabla
 *
 * Esta función devuelve la cantidad de registros de una tabla.
 */
function get_table_count($conn, $table)
{
    $sql = "SELECT * FROM $table";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_num_rows($query);
    mysqli_free_result($query);
    return $result;
}

/**
 * @param $numRows especifica la cantidad de registros en la tabla
 * @return $pages especifica la cantidad de paginas en la que se dividira la tabla
 *
 * Esta función devuelve la cantidad de paginas que dividiran la tabla.
 */
function get_pages_count($numRows)
{
    $pages = 0;
    for ($x = 1; $x <= $numRows; $x++) {
        if ($x % 10 == 0) {
            $pages++;
        }
    }
    if ($numRows > $pages * 10) {
        $pages++;
    }
    return $pages;
}

/**
 * @param $pages obtiene el numero de paginas
 * @return $index obtiene el punto de comienzo del listado en un indice especifico
 */
function get_index($pages, $limit)
{
    if (!isset($_GET['index'])) {
        $index = 0;
        $_GET["index"] = 0;
    } elseif ($_GET['index'] < 0) {
        $index = 0;
        $_GET["index"] = 0;
    } elseif ($_GET['index'] > $pages - 1) {
        $index = 0;
        $_GET["index"] = 0;
    } else {
        $index = ($_GET['index'] > 0) ? $_GET['index'] * $limit : 0;
    }
    return $index;
}

?>