

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

    <div class="buscador">
        <form action="clasificacionEquipos.php" method="GET" class="formulario">
        <input class="texto-ingreso" type="search" name="valor" placeholder="Buscar equipo" autocomplete="off">
       <input class="img-buscador" type="image" src="https://image.flaticon.com/icons/png/128/2932/2932802.png">
        </form>
    </div>

    <?php
        //declaramos los chequeos como falso
        $check2=false;
        $check=false;
        //verificamos si existe alguna busqueda
        if(isset($_GET["valor"]) && $_GET["valor"] != ""){
            $valor = $_GET["valor"];
            //realizamos la consulta con el valor ingresadl
                $query="select equipos.nomb_equipo,sum(tiempo_equipo) as total from participa inner join equipos on participa.cod_equipo=equipos.cod_equipo where UNACCENT(nomb_equipo) ilike '%$valor%' group by equipos.nomb_equipo";
            //realizamos la consulta para obtener los puestos 
                $pos="select row_number() over (order by sum(tiempo_equipo)) as puesto,equipos.nomb_equipo as nombre from participa inner join equipos on participa.cod_equipo=equipos.cod_equipo group by equipos.cod_equipo";
            //ejecutamos la consulta de los puestos
            //se declara que la consulta con la busqueda ha sido realizada
                $check2 = true;
            
        }else{
            //en caso de no exister una busqueda, realizamos la consulta con todos los equipos y sus puestos
            $query="select row_number() over (order by sum(tiempo_equipo)) as puesto,equipos.nomb_equipo,sum(tiempo_equipo) as total from participa inner join equipos on participa.cod_equipo=equipos.cod_equipo group by equipos.nomb_equipo order by total";
            $check = false;
            $check2 = false;
        }
        //ejecutamos la consulta general
        $resultado=pg_query($conexion,$query);
        $resultado3=pg_query($conexion,$query);
        //verificamos si la consulta con la busqueda ha tenido resultados
        //en caso contrario, se declara que la consulta con la busqueda no fue realizada correctamente
        if(pg_num_rows($resultado) === 0 && $check2 === true){
            $check2 = false;
        }
        $puesto = array();
        //se verifica si la consulta con la busqueda ha sido realizada correctamente
        if($check2){
            //se extrae el nombre del equipo buscado
            while($result=pg_fetch_array($resultado3)){
                $resultado4=pg_query($conexion,$pos);
                while($filas=pg_fetch_array($resultado4)){
                    //se busca el nombre del equipo buscado en la consulta de los puestos
                    if($filas['nombre'] === $result['nomb_equipo']){
                        //una vez ha sido encontrada, se guarda el puesto y se declara que el puesto ha sido encontrado
                        $check = true;
                        $puesto[] = $filas['puesto'];
                        break;
                    }
                }
            }

        }
        

        if(!$resultado or pg_num_rows($resultado)==0){
            echo '<p  id="ingreso">Ingresa una busqueda nuevamente</p>';
            $resultado=pg_query($conexion,"select row_number() over (order by sum(tiempo_equipo)) as puesto,equipos.nomb_equipo,sum(tiempo_equipo) as total from participa inner join equipos on participa.cod_equipo=equipos.cod_equipo group by equipos.nomb_equipo order by total") or die("Error");
        }


        $n=0;
        echo "<table align=center>
                    <thead><td id=iz>Puesto</td><td>Equipo</td><td id=der>Tiempo total</td></thead>";
            while($filas1=pg_fetch_array($resultado)){
                //si el puesto ha sido encontrado, se muestra
                if($check){
                    echo "<tr><td>".$puesto[$n]."</td>";
                    $n++;
                }//en caso contrario, se muestra la tabla normal
                else{
                    echo "<tr><td>".$filas1["puesto"]."</td>";
                }
                echo "<td>".$filas1["nomb_equipo"]."</td>";
                echo "<td>".$filas1["total"]."</td></tr>";
            }echo "</table>";

    ?>
    
    <?php require '../footer.php' ?>
    
</body>
    
    
    
    
</html>