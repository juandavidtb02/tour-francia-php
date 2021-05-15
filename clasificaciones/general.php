<?php include('../conexionDB.php');
?>


<!doctype html>
<html lang="es">
<meta charset="UTF -8" />
    
<head>
    <title>TOUR DE FRANCIA 2021</title>
    <link rel="stylesheet" type="text/css" href="../equipos/estiloEquipos.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="https://www.letour.fr/img/global/logo-reversed@2x.png"/>
</head>

<body>
    <?php require '../header.php' ?>
    
    <h1><br>CLASIFICACIÓN GENERAL</h1>


    <?php
        $conexion = conectarbase();
        $query="select row_number() over (order by sum(tiempo_ciclista)) as puesto,nomb_ciclista,apellido_ciclista,sum(tiempo_ciclista) as total from corre inner join ciclistas on corre.cod_ciclista=ciclistas.cod_ciclista group by nomb_ciclista,apellido_ciclista order by total;";
        $resultado=pg_query($conexion,$query) or die ("Error en consultar universidad");
        $nr=pg_num_rows($resultado);
        if($nr>0){
            echo "<table align=center>
                      <thead><td id=iz>Puesto</td><td>Nombre</td><td>Apellido</td><td id=der>Tiempo total</td></thead>";
            while($filas=pg_fetch_array($resultado)){
                echo "<tr><td>".$filas["puesto"]."</td>";
                echo "<td>".$filas["nomb_ciclista"]."</td>";
                echo "<td>".$filas["apellido_ciclista"]."</td>";
                echo "<td>".$filas["total"]."</td>";
            }echo "</table>";
        }else{
            echo "No hay datos ingresados";
        }

    ?>
    
    <footer><p><br>Creado por:</p>
        <p>Juan David Torres Barreto - 160004330</p>
        <p>Daniel Camilo Alferez Garcia - 160004302</p>
        <p id="copy">© 2021</p>
        <a href="https://www.unillanos.edu.co/"><img id="unillanos" src="https://posgrados.unillanos.edu.co/maestria-estudios-culturales/images/Logo%20Unillanos2019.png" width="200px"></a>
        <a href="https://www.instagram.com/letourdefrance/?hl=es-la"><img id="inst" src="https://imagenes.milenio.com/1udt1di_SAd03sjMqZeC9bQ7ePU=/958x596/https://www.milenio.com/uploads/media/2019/10/01/como-puedo-activar-el-modo.png" width="60px"></a>
        <a href="https://es-la.facebook.com/letour/"><img id="face" src="https://static1.elcorreo.com/www/multimedia/202004/23/media/cortadas/1565689109_969444_1565689520_noticia_normal-k3LD-U10010140614850aB-1248x770@El%20Correo.jpg" width="55px;"></a>
        <a href="https://twitter.com/letour"><img id="twitter" src="https://1000marcas.net/wp-content/uploads/2019/11/S%C3%ADmbolo-twitter.jpg" width="40px"></a>
    </footer>
    
</body>
    
    
    
    
</html>