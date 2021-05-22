

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

    <h1><br>CLASIFICACIÓN POR EQUIPOS</h1>

    <?php
        $query="select row_number() over (order by sum(tiempo_equipo)) as puesto,equipos.nomb_equipo,sum(tiempo_equipo) as total from participa inner join equipos on participa.cod_equipo=equipos.cod_equipo group by equipos.nomb_equipo order by total";
        $resultado=pg_query($conexion,$query) or die ("Error en consultar universidad");
        $nr=pg_num_rows($resultado);
        if($nr>0){
            echo "<table align=center>
                      <thead><td id=iz>Puesto</td><td>Equipo</td><td id=der>Tiempo total</td></thead>";
            while($filas=pg_fetch_array($resultado)){
                echo "<tr><td>".$filas["puesto"]."</td>";
                echo "<td>".$filas["nomb_equipo"]."</td>";
                echo "<td>".$filas["total"]."</td></tr>";
            }echo "</table>";
        }else{
            echo "No hay datos ingresados";
        }

    ?>
    
    <?php require '../footer.php' ?>
    
</body>
    
    
    
    
</html>