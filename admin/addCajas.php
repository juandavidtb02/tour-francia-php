<link rel="stylesheet" type="text/css" href="./estiloCrud.css?v=<?php echo time(); ?>" />


<section class="agregar">
    <form action="./addData.php" method="post">
        <input type="hidden" name="tabla" value="pais" class="varT">
        <?php while($filas = pg_fetch_array($result)):?>
            <input type="text" name="<?php echo $filas['column_name'];?>" placeholder="Digite el <?php echo $filas['column_name']; ?>" autocomplete="off">
        <?php endwhile;?>
        <input type="submit" name="users" value="Agregar">
    </form>
</section>