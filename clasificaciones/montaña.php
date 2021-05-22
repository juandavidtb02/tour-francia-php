
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

    <img id="fondo" src="https://image.api.playstation.com/cdn/EP4133/CUSA08153_00/xnXcOa0IMPBWJvBK7lmgra8EMy0ueIPH.jpg">
    
    <h1><br>CLASIFICACIÓN POR MONTAÑA</h1>

    <?php

        $query="select row_number() over (order by sum(tiempo_ciclista)) as puesto,nomb_ciclista,apellido_ciclista,sum(tiempo_ciclista) as total from ciclistas inner join corre on ciclistas.cod_ciclista=corre.cod_ciclista inner join etapa on corre.cod_etapa=etapa.cod_etapa where tipo='MONTAÑA' group by nomb_ciclista,apellido_ciclista order by total";
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
    
    <?php require '../footer.php' ?>
    
</body>
    
    
    
    
</html>