<?php require 'conexionDB.php';
    session_start();
    $conexion = conectarbase();
    if(isset($_SESSION['cod_user'])){
        $cod = $_SESSION['cod_user'];
        $consulta = "SELECT * FROM users WHERE cod_user='".$cod."' ";
        $results = pg_query($conexion,$consulta);

        $user = null;

        if($results && pg_num_rows($results) > 0){
            $user = pg_fetch_object($results,0);
        }
        
    }

?>


<link rel="stylesheet" type="text/css" href="/tour-francia-app/estiloHeader.css?v=<?php echo time(); ?>" />

<header>
        <a href="/index.php"><img id="logo" src="https://www.letour.fr/img/global/logo-reversed@2x.png"></a>
        <?php if(!empty($user)): ?>
        <a href="/admin/user.php"><img id ="user" src="https://cdn.pixabay.com/photo/2020/07/14/13/07/icon-5404125_960_720.png"></a>
        <a href="/admin/logout.php"><img id="salir" src="https://cdn.icon-icons.com/icons2/368/PNG/512/Logout_37127.png"></a>
        <?php endif;?>
        <nav id="menu">
            <ul>
                <li id="item"><a href="/index.php">Inicio</a></li>
                <li id="item"><a href="#">Equipos</a>
                    <ul id="desple">
                        <li><a href="/equipos/equiposParticipantes.php">Equipos participantes</a></li>
                        <li><a href="/equipos/ciclistas.php">Ciclistas participantes</a></li>
                        <li><a href="/equipos/paisesParticipantes.php">Paises participantes</a></li>
                    </ul>
                </li>
                <li id="item"><a href="#">Clasificaciones</a>
                    <ul id="desple2">
                        <li><a href="/clasificaciones/general.php">Clasificacion general</a></li>
                        <li><a href="/clasificaciones/sprint.php">Clasificacion de Sprint</a></li>
                        <li><a href="/clasificaciones/montaña.php">Clasificacion por montaña</a></li>
                        <li><a href="/clasificaciones/puntos.php">Clasificacion por puntos</a></li>
                        <li><a href="/clasificaciones/clasificacionEquipos.php">Clasificacion por equipos</a></li>
                    </ul>
                </li>
                <li id="item"><a href="#">Etapas</a>
                    <ul id="desple3">
                        <li><a href="/etapas/recorrido.php">Recorrido 2021</a></li>
                        <li><a href="/etapas/ganadores.php">Ganadores por etapas</a></li>
                    </ul>
                </li>
            </ul>
        
        </nav>
    </header>