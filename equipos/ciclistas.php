<?php include('../conexionDB.php');
?>


<!doctype html>
<html lang="es">
<meta charset="UTF -8" />
    
<head>
    <title>TOUR DE FRANCIA 2021</title>
    <link rel="stylesheet" type="text/css" href="estiloCiclistas.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="https://www.letour.fr/img/global/logo-reversed@2x.png"/>
</head>

<body>
    
<?php require '../header.php' ?>
    
    <h1><br>CICLISTAS PARTICIPANTES</h1>


    <?php
        $conexion = conectarbase();
        $query="select * from ciclistas";
        $resultado=pg_query($conexion,$query) or die ("Error en consultar la base de datos");
        $nr=pg_num_rows($resultado);
        if($nr>0){
            echo "<table align=center>
                      <thead><td id=iz>Codigo del ciclista</td><td>Nombre del ciclistas</td><td>Apellido del ciclista</td><td>Fecha de nacimiento</td><td id=der>Nacionalidad</td></thead>";
            while($filas=pg_fetch_array($resultado)){
                echo "<tr><td>".$filas["cod_ciclista"]."</td>";
                echo "<td>".$filas["nomb_ciclista"]."</td>";
                echo "<td>".$filas["apellido_ciclista"]."</td>";
                echo "<td>".$filas["fech_nac"]."</td>";
                echo "<td id=der>".$filas["pais_ciclista"]."</td>";
            }echo "</table>";
        }else{
            echo "No hay datos ingresados";
        }

    ?>
    
    <?php require '../footer.php' ?>    
    
</body>
    
    
    
    
</html>