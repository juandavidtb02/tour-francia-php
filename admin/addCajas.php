<link rel="stylesheet" type="text/css" href="./estiloCrud.css?v=<?php echo time(); ?>" />


<section class="agregar">
    <form action="./addData.php" method="post">
        <input type="hidden" name="tabla" value="<?php echo $tabla;?>" class="varT">
        <?php while($filas = pg_fetch_array($result)):?>
            <?php if($filas['column_name'] === 'fecha_etapa' || $filas['column_name'] === 'fech_nac'):?>
                <p><?php echo $filas['column_name'] ?>:</p>
                <input type="date" name="<?php echo $filas['column_name'];?>" placeholder="Digite el <?php echo $filas['column_name']; ?>" autocomplete="off">
            <?php else:?>
                <input type="text" name="<?php echo $filas['column_name'];?>" placeholder="Digite el <?php echo $filas['column_name']; ?>" autocomplete="off">
            <?php endif;?>
        <?php endwhile;?>
        <input type="submit" name="users" value="Agregar">
    </form>
</section>