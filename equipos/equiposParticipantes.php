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

    <div class="buscador">
        <form action="equiposParticipantes.php" method="GET" class="formulario">
        <input class="texto-ingreso" type="search" name="valor" placeholder="Buscar por pais" autocomplete="off">
       <input class="img-buscador" type="image" src="https://image.flaticon.com/icons/png/128/2932/2932802.png">
        </form>
    </div>

    <?php
        $conexion = conectarbase();
        if(isset($_GET["valor"]) && $_GET["valor"] != ""){
            $valor = $_GET["valor"];
                $query="select cod_equipo, nomb_equipo, pais_equipo from equipos inner join pais on equipos.pais_equipo=pais.cod_pais where UNACCENT(nomb_pais) ilike '%$valor%' or pais_equipo ilike '%$valor%'";
        }else{
            $query="select * from equipos";
        }

        $resultado=pg_query($conexion,$query);

        if(!$resultado or pg_num_rows($resultado)==0){
            echo '<p  style="font-size:30px; tex height:80px; color: white; text-align:center; font-family: Arial, Helvetica, sans-serif; ">Ingresa una busqueda nuevamente</p>';
            $resultado=pg_query($conexion,"select * from equipos") or die("Error");
        }

        echo "<table align=center>
        <thead><td id=iz>Codigo del equipo</td><td>Nombre del equipo</td><td id=der>Pais</td></thead>";
    while($filas=pg_fetch_array($resultado)){
    echo "<tr><td>".$filas["cod_equipo"]."</td>";
  echo "<td>".$filas["nomb_equipo"]."</td>";
  echo "<td id=der>".$filas["pais_equipo"]."</td>";
}echo "</table>";

    ?>


    <?php require '../footer.php' ?>
    
</body>
    
    
</html>