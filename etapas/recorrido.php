<?php include('../conexionDB.php');
?>

<!doctype html>
<html lang="es">
<meta charset="UTF -8" />
    
<head>
    <title>TOUR DE FRANCIA 2021</title>
    <link rel="stylesheet" type="text/css" href="estiloRecorrido.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="https://www.letour.fr/img/global/logo-reversed@2x.png"/>
</head>

<body>

    <?php require '../header.php' ?>   

    <h1><br>RECORRIDO 2021</h1>

    <center><img id="reco" src="https://e00-marca.uecdn.es/assets/multimedia/imagenes/2020/11/01/16042614796672.jpg"></center>
    
    
    <?php
        $conexion = conectarbase();
        $query="select cod_etapa,distancia,fecha_etapa,c.nombre_ciudad as destino,d.nombre_ciudad as origen,tipo from ciudad c inner join etapa on c.cod_ciudad=ciudad_destino inner join ciudad d on ciudad_origen=d.cod_ciudad order by cod_etapa";
        $resultado=pg_query($conexion,$query) or die ("Error en consultar base");
        $nr=pg_num_rows($resultado);
        if($nr>0){
            echo "<center><h2>Tabla etapas</h2></center>";
            echo "<table align=center>
                      <thead><td id=iz>Codigo</td><td>Distancia (km)</td><td>Fecha</td><td>Ciudad origen</td><td>Ciudad destino</td><td id=der>Tipo</td></thead>";
            while($filas=pg_fetch_array($resultado)){
                echo "<tr><td>".$filas["cod_etapa"]."</td>";
                echo "<td>".$filas["distancia"]."</td>";
                echo "<td>".$filas["fecha_etapa"]."</td>";
                echo "<td>".$filas["origen"]."</td>";
                echo "<td>".$filas["destino"]."</td>";
                echo "<td id=der>".$filas["tipo"]."</td>";
            }echo "</table>";
        }else{
            echo "No hay datos ingresados";
        }

    ?>


    <?php require '../footer.php' ?>  
    
</body>
    
    
    
    
</html>