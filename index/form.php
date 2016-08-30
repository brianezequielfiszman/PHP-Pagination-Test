<main id="formContainer">
    <form action="db/insert.php" method="post" id="insertForm">
        <section class="inputSection">
            <input type="text" name="name" placeholder="Producto" class="inputText">
        </section>
        <section class="inputSection">
            <input type="text" name="price" placeholder="Precio" class="inputText">
        </section>
        <section id="formBottom">
            <input type="submit" value="Insertar" class="submit">
            <a href="list.php?index=0" id="tolist">Listar datos existentes</a>
        </section>
    </form>
</main>
