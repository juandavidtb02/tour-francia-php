<?php include('conexionDB.php');
?>


<!doctype html>
<html lang="es">
<meta charset="UTF -8" />
    
<head>
    <title>TOUR DE FRANCIA 2021</title>
    <link rel="stylesheet" type="text/css" href="estilo.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="https://www.letour.fr/img/global/logo-reversed@2x.png"/>
</head>

<body>
    <header>
        <a href="#"><img src="https://www.letour.fr/img/global/logo-reversed@2x.png"></a>
        <nav id="menu">
            <ul>
                <li id="item"><a href="#">Inicio</a></li>
                <li id="item"><a href="#">Equipos</a>
                    <ul id="desple">
                        <li><a href="equipos/equiposParticipantes.php">Equipos participantes</a></li>
                        <li><a href="equipos/ciclistas.php">Ciclistas participantes</a></li>
                        <li><a href="equipos/paisesParticipantes.php">Paises participantes</a></li>
                    </ul>
                </li>
                <li id="item"><a href="#">Clasificaciones</a>
                    <ul id="desple2">
                        <li><a href="clasificaciones/general.php">Clasificacion general</a></li>
                        <li><a href="#">Clasificacion de Sprint</a></li>
                        <li><a href="#">Clasificacion por montaña</a></li>
                        <li><a href="#">Clasificacion por puntos</a></li>
                        <li><a href="#">Clasificacion por equipos</a></li>
                    </ul>
                </li>
                <li id="item"><a href="#">Etapas</a>
                    <ul id="desple3">
                        <li><a href="etapas/recorrido.php">Recorrido 2021</a></li>
                        <li><a href="#">Ganadores por etapas</a></li>
                    </ul>
                </li>
            </ul>
        
        </nav>
    </header>
    <center><div class="presentacion">
        <h1>Tour de Francia 2021</h1>
        <p>Bienvenidos a la web (no) oficial del Tour de Francia 2021, en este medio podrás consultar
        toda la información sobre la competencia más grande del ciclismo.<br><br>
        La 108ª edición del Tour de France arrancará en Brest, al oeste del país francés, el sábado 26 de junio del 2021.
        Y terminará el 18 de julio del mismo año en la capital francesa, París.<br><br>
        </p>
        <img src="https://www.palco23.com/files/0002017/004temas/tour-francia-campos-eliseos-TAG.jpg" width="500px">
        <p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Esta aplicacíon fue creada por los estudiantes de ingeníeria de sistemas Juan David Torres Barreto y Daniel Camilo
        Alférez García para el proyecto final de la materia Bases de datos.<br><br>
        Para el desarrollo de la aplicación, se utilizó PostgreSQL como motor de bases de datos, Heroku como servidor y herramienta para el desarrollo. Ademá
        del uso de HTML y CSS para el diseño principal</p>
    </div></center>
    
</body>
    
    <footer><p><br>Creado por:</p>
        <p>Juan David Torres Barreto - 160004330</p>
        <p>Daniel Camilo Alferez Garcia - 160004302</p>
        <p id="copy">© 2021</p>
        <a href="https://www.unillanos.edu.co/"><img id="unillanos" src="https://posgrados.unillanos.edu.co/maestria-estudios-culturales/images/Logo%20Unillanos2019.png" width="200px"></a>
        <a href="https://www.instagram.com/letourdefrance/?hl=es-la"><img id="inst" src="https://imagenes.milenio.com/1udt1di_SAd03sjMqZeC9bQ7ePU=/958x596/https://www.milenio.com/uploads/media/2019/10/01/como-puedo-activar-el-modo.png" width="60px"></a>
        <a href="https://es-la.facebook.com/letour/"><img id="face" src="https://static1.elcorreo.com/www/multimedia/202004/23/media/cortadas/1565689109_969444_1565689520_noticia_normal-k3LD-U10010140614850aB-1248x770@El%20Correo.jpg" width="55px;"></a>
        <a href="https://twitter.com/letour"><img id="twitter" src="https://1000marcas.net/wp-content/uploads/2019/11/S%C3%ADmbolo-twitter.jpg" width="40px"></a>
    </footer>
    
    
</html>
