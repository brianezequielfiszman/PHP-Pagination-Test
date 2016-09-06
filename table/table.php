<?php
/**
 * Created by PhpStorm.
 * User: Brian
 * Date: 5/12/2016
 * Time: 12:05 PM
 */
require("db/select.php");
?>
<!-- La siguiente tabla imprime todos los registros de la tabla Productos -->
<main id="tableContainer">
    <article>
        <table id="productTable">
            <thead>
            <tr>
                <?php foreach ($assoc as $value) { ?>
                    <th id="tableHeading"><?php echo $value; ?></th>
                <?php } ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($mat as $index => $register) { ?>
                <tr>
                    <?php foreach ($register as $i => $value) { ?>
                        <td id="tableData"><?php echo $value; ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <a href="index.php">Volver</a>
    </article>
    <!-- Las siguientes lineas imprimen los indices de paginado  -->
    <footer id="pagination">
        <?php if ($_GET["index"] > 0) { ?>
            <a href="<?php echo $_SERVER["PHP_SELF"] . "?index=" . ($_GET["index"] - 1); ?>" class="tableIndex"><
                Anterior</a>
        <?php } ?>
        <?php for ($x = 0; $x < $pages; $x++) { ?>
            <a href="<?php echo $_SERVER["PHP_SELF"] . "?index=" . $x; ?>" class="tableIndex"><?php echo $x; ?></a>
        <?php } ?>
        <?php if ($_GET["index"] < $pages - 1) { ?>
            <a href="<?php echo $_SERVER["PHP_SELF"] . "?index=" . ($_GET["index"] + 1); ?>" class="tableIndex">Siguiente
                > </a>
        <?php } ?>
    </footer>
</main>
