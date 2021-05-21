<?php include('../conexionDB.php');
?>


<!doctype html>
<html lang="es">
<meta charset="UTF -8" />
    
<head>
    <title>TOUR DE FRANCIA 2021</title>
    <link rel="stylesheet" type="text/css" href="estiloEquipos.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="https://www.letour.fr/img/global/logo-reversed@2x.png"/>
</head>

<body>
   
    <?php require '../header.php' ?>

    <img id="fondo" src="https://image.api.playstation.com/cdn/EP4133/CUSA08153_00/xnXcOa0IMPBWJvBK7lmgra8EMy0ueIPH.jpg">
    
    <h1><br>EQUIPOS PARTICIPANTES</h1>

    <section></section>

    <?php
        $conexion = conectarbase();
        $query="select * from equipos order by cod_equipo";
        $resultado=pg_query($conexion,$query) or die ("Error en consultar universidad");
        $nr=pg_num_rows($resultado);
        if($nr>0){
            echo "<table align=center>
                      <thead><td id=iz>Codigo del equipo</td><td>Nombre del equipo</td><td id=der>Pais</td></thead>";
            while($filas=pg_fetch_array($resultado)){
                echo "<tr><td>".$filas["cod_equipo"]."</td>";
                echo "<td>".$filas["nomb_equipo"]."</td>";
                echo "<td id=der>".$filas["pais_equipo"]."</td>";
            }echo "</table>";
        }else{
            echo "No hay datos ingresados";
        }

    ?>
    
    <?php require '../footer.php' ?>
    
</body>
    
    
    
    
</html>