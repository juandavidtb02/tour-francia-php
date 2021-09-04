
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
    <div class="fondo">
        <h1><br>CICLISTAS RETIRADOS</h1>
    </div>
    <?php
        
        
        $query="select cod_ciclista,nomb_ciclista,apellido_ciclista,(current_date - fech_nac)/365 as edad,pais_ciclista, nomb_equipo, inicio_contrato, fin_contrato, cant_etapas from ciclistas_retirados group by cod_ciclista,nomb_ciclista,apellido_ciclista,edad,pais_ciclista order by cod_ciclista";
        $resultado=pg_query($conexion,$query);

            echo "<table align=center>
                      <thead><td id=iz>Codigo del ciclista</td><td>Nombre del ciclistas</td><td>Apellido del ciclista</td><td>Edad</td><td>Nacionalidad</td><td>Equipo</td><td>Inicio Contrato</td><td>Fin Contrato</td><td id=der>Etapas Completadas</td></thead>";
            while($filas=pg_fetch_array($resultado)){
                echo "<tr><td>".$filas["cod_ciclista"]."</td>";
                echo "<td>".$filas["nomb_ciclista"]."</td>";
                echo "<td>".$filas["apellido_ciclista"]."</td>";
                echo "<td>".$filas["edad"]."</td>";
                echo "<td>".$filas["pais_ciclista"]."</td>";
                echo "<td>".$filas["nomb_equipo"]."</td>";
                echo "<td>".$filas["inicio_contrato"]."</td>";
                echo "<td>".$filas["fin_contrato"]."</td>";
                echo "<td id=der>".$filas["cant_etapas"]."</td>";

            }echo "</table>";

    ?>
    
    <?php require '../footer.php' ?>    
    
</body>
    
    
    
    
</html>