<?php include('../conexionDB.php');
?>


<!doctype html>
<html lang="es">
<meta charset="UTF -8" />
    
<head>
    <title>TOUR DE FRANCIA 2021</title>
    <link rel="stylesheet" type="text/css" href="estiloPaises.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="https://www.letour.fr/img/global/logo-reversed@2x.png"/>
</head>

<body>

    <?php require '../header.php' ?>

    <img id="fondo" src="https://www.mundodeportivo.com/r/GODO/MD/p6/ContraPortada/Imagenes/2019/07/06/Recortada/20190706-636980227837280350_20190706151538848-kCOI-U463314237145moD-980x554@MundoDeportivo-Web.jpg">
    
    <h1><br>PAISES PARTICIPANTES</h1>
    <?php
        $conexion = conectarbase();
        $query="select * from pais order by nomb_pais";
        $resultado=pg_query($conexion,$query) or die ("Error en consultar universidad");
        $nr=pg_num_rows($resultado);
        if($nr>0){
            echo "<table align=center>
                      <thead><td id=iz>Codigo</td><td id=der>Nombre</td></thead>";
            while($filas=pg_fetch_array($resultado)){
                echo "<tr><td>".$filas["cod_pais"]."</td>";
                echo "<td id=der>".$filas["nomb_pais"]."</td>";
            }echo "</table>";
        }else{
            echo "No hay datos ingresados";
        }

    ?>
    
    <?php require '../footer.php' ?>
    
</body>
    
    
    
    
</html>