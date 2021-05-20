<?php include('conexionDB.php');
?>


<!doctype html>
<html lang="es">
<meta charset="UTF -8" />
    
<head>
    <title>TOUR DE FRANCIA 2021</title>
    <link rel="stylesheet" type="text/css" href="estilo.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="https://www.letour.fr/img/global/logo-reversed@2x.png"/>
</head>

<body>
    
<?php require 'header.php' ?>

    <center><div class="presentacion">
        <h1>Tour de Francia 2021</h1>
        <p>Bienvenidos a la web (no) oficial del Tour de Francia 2021, en este medio podrás consultar
        toda la información sobre la competencia más grande del ciclismo.<br><br>
        La 108ª edición del Tour de France arrancará en Brest, al oeste del país francés, el sábado 26 de junio del 2021.
        Y terminará el 18 de julio del mismo año en la capital francesa, París.<br><br>
        </p>
        <img src="https://www.palco23.com/files/0002017/004temas/tour-francia-campos-eliseos-TAG.jpg" width="500px">
        <p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Esta aplicacíon fue creada por los estudiantes de ingeníeria de sistemas Juan David Torres Barreto y Daniel Camilo
        Alférez García para el proyecto final de la materia Bases de datos.<br><br>
        Para el desarrollo de la aplicación, se utilizó PostgreSQL como motor de bases de datos, Heroku como servidor y herramienta para el desarrollo. Se utilizó HTML y CSS para el diseño principal, 
        y PHP como lenguaje de programación principal para mostrar correctamente la información en el sitio web.</p>
    </div></center>
    
</body>
    
<?php require 'footer.php' ?>

    
</html>
