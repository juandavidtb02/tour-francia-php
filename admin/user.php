
<!doctype html>
<html lang="es">
<meta charset="UTF -8" />
    
<head>
    <title>TOUR DE FRANCIA 2021</title>
    <link rel="stylesheet" type="text/css" href="estiloLogin.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="https://www.letour.fr/img/global/logo-reversed@2x.png"/>
</head>

<body>
    
<?php require '../header.php' ?>
    <?php if(!empty($user)): ?>
        <h1>Administrador de la base de datos</h2>
        <a id="cerrar" href="logout.php"><input type="submit" value="Cerrar sesión"></a>
    <?php endif;?>

    
<?php require '../footer.php' ?>

</html>
