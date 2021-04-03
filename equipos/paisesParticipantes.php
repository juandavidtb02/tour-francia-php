<?php include('../conexionDB.php');
?>


<!doctype html>
<html lang="es">
<meta charset="UTF -8" />
    
<head>
    <title>TOUR DE FRANCIA 2021</title>
    <link rel="stylesheet" type="text/css" href="estiloPaises.css?v=<?php echo time(); ?>" />
</head>

<body>
    <header>
        <a href="../index.php"><img src="https://www.letour.fr/img/global/logo-reversed@2x.png"></a>
        <nav id="menu">
            <ul>
                <li id="item"><a href="../index.php">Inicio</a></li>
                <li id="item"><a href="#">Equipos</a>
                    <ul id="desple">
                        <li><a href="#">Equipos participantes</a></li>
                        <li><a href="#">Ciclistas participantes</a></li>
                        <li><a href="#">Paises participantes</a></li>
                    </ul>
                </li>
                <li id="item"><a href="#">Clasificaciones</a>
                    <ul id="desple2">
                        <li><a href="#">Clasificacion general</a></li>
                        <li><a href="#">Clasificacion de Sprint</a></li>
                        <li><a href="#">Clasificacion por montaña</a></li>
                        <li><a href="#">Clasificacion por puntos</a></li>
                        <li><a href="#">Clasificacion por equipos</a></li>
                    </ul>
                </li>
                <li id="item"><a href="#">Etapas</a>
                    <ul id="desple3">
                        <li><a href="#">Recorrido 2021</a></li>
                        <li><a href="#">Ganadores por etapas</a></li>
                    </ul>
                </li>
            </ul>
        
        </nav>
    </header>
    
    <h1><br>PAISES PARTICIPANTES</h1>
    <?php
        $conexion = conectarbase();
        $query="select * from pais";
        $resultado=pg_query($conexion,$query) or die ("Error en consultar universidad");
        $nr=pg_num_rows($resultado);
        if($nr>0){
            echo "<center><h2>Tabla paises</h2></center>";
            echo "<table border=1 bgcolor=#A9B8BF align=center cellpadding=18>
                      <tr><td>Codigo</td><td>Nombre</td>";
            while($filas=pg_fetch_array($resultado)){
                echo "<tr><td>".$filas["cod_pais"]."</td>";
                echo "<td>".$filas["nomb_pais"]."</td>";
            }echo "</table>";
        }else{
            echo "No hay datos ingresados";
        }

    ?>
    
    <footer><p><br>Creado por:</p>
        <p>Juan David Torres Barreto - 160004330</p>
        <p>Daniel Camilo Alferez Garcia - 160004302</p>
        <p id="copy">© 2021</p>
        <a href="https://www.unillanos.edu.co/"><img id="unillanos" src="https://lh3.googleusercontent.com/proxy/ewCjKlFx0pO8Ldk5BTuGSPxtFBgUHlkufmqy71Jkr2_JRP9VdS_7LFd5_NxGU9E5uBe1rik7__nyI4HTGLY7ElCW3GIiDzPRKkLw65AWlBq8k0SjN4OsLCx7xWrS-Akc" width="200px"></a>
        <a href="https://www.instagram.com/letourdefrance/?hl=es-la"><img id="inst" src="https://imagenes.milenio.com/1udt1di_SAd03sjMqZeC9bQ7ePU=/958x596/https://www.milenio.com/uploads/media/2019/10/01/como-puedo-activar-el-modo.png" width="60px"></a>
        <a href="https://es-la.facebook.com/letour/"><img id="face" src="https://static1.elcorreo.com/www/multimedia/202004/23/media/cortadas/1565689109_969444_1565689520_noticia_normal-k3LD-U10010140614850aB-1248x770@El%20Correo.jpg" width="55px;"></a>
        <a href="https://twitter.com/letour"><img id="twitter" src="https://1000marcas.net/wp-content/uploads/2019/11/S%C3%ADmbolo-twitter.jpg" width="40px"></a>
    </footer>
    
</body>
    
    
    
    
</html>