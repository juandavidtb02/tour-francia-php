
<!doctype html>
<html lang="es">
<meta charset="UTF -8" />
    
<head>
    <title>TOUR DE FRANCIA 2021</title>
    <link rel="stylesheet" type="text/css" href="estiloCrud.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="https://www.letour.fr/img/global/logo-reversed@2x.png"/>
</head>

<body>

<?php require './columns.php' ?>
<?php require '../header.php' ?>
<?php require './tabla.php' ?>
    <?php if(!empty($user)): ?>
        <h1>Administrador de la base de datos</h2>
        <div class="container">
            <div class="lbl">
                <label for="radio1">Inicio</label>
                <label for="radio2">Paises</label>
                <label for="radio3">Ciudades</label>
                <label for="radio4">Ciclistas</label>
                <label for="radio5">Equipos</label>
                <label for="radio6">Etapas</label>
                <label for="radio7">Participa</label>
                <label for="radio8">Corre</label>
            </div>
            <div class="content">
                <input type="radio" name="radio" id="radio1" checked>
                <div class="tab1">
                    <h2>Inicio</h2>
                    <p>Bienvenido al administrador de la base de datos "Tour de Francia 2021". Recuerda que<br>
                    todos los cambios que realices traerán consecuencias en la información que se muestra en la página.</p>
                    <h3>Modelo entidad relación</h3>
                    <p>Recuerda que a la hora de editar la información debes tener en cuenta el modelo entidad-relación de la base de datos Tour de Francia 2021.</p>
                    <img id="reco" src="./modeloER.png">
                    <p>*No incluye la tabla users</p>
                    <h3>Usuarios registrados</h3>
                    <p>La siguiente información corresponde a los usuarios registrados hasta el momento con sus respectivos datos:</p>
                    <section class="box">
                        <h3>Añadir un dato</h3>
                        <section class="agregar">
                            <form action="./addData.php" method="post">
                            <input type="hidden" name="tabla" value="users" class="varT">
                            <input type="text" name="email" placeholder="Digite el correo" autocomplete="off">
                            <input type="text" name="password" placeholder="Digite la contraseña" autocomplete="off">
                            
                            <input type="submit" value="Agregar">
                            </form>
                        </section>

                        <h3>Tabla actual</h3>

                        <?php
                            $tabla = "users";
                            $var = "cod_user";
                            $query="select * from users";
                            $resultado=pg_query($conexion,$query) or die("Error al consultar usuarios");
                            echo "<table>
                                <thead class='head'><td id=iz>ID usuario</td><td>Correo</td><td>Contraseña</td><td>Fecha de registro</td><td id=der>Opciones</td></thead>";
                                while($filas=pg_fetch_array($resultado)){
                                    echo "<tr class='linea'><td id='izq'>".$filas["cod_user"]."</td>";
                                    $valor = $filas["cod_user"];
                                    echo "<td>".$filas["email"]."</td>";
                                    echo "<td>".$filas["password_user"]."</td>";
                                    echo "<td>".$filas["fecha_registro"]."</td>";
                                    echo "<td><section class='botones'>
                                            <a href='./delete.php?valor=".$valor."&tabla=".$tabla."&var=".$var."'><img id='imgborrar' src='https://ayudawp.com/wp-content/uploads/2018/04/borrar-plugins-wordpress.png' width='40px'></a>
                                            <a href='./edit.php?valor=".$valor."&tabla=".$tabla."&var=".$var."' ><img id='imgeditar' src='https://cdn.pixabay.com/photo/2017/06/06/00/33/edit-icon-2375785_960_720.png' width='35px'></a>
                                        </section></td>";
                                }echo "</table>";
                        ?>

                        </section>
                        
                </div>

                <input type="radio" name="radio" id="radio2">
                <div class="tab2">
                    <h2>Paises</h2>
                    <p>La siguiente información correspone a los paises participantes del Tour de Francia 2021:</p>
                    <section class="box">
                        <h3>Añadir un dato</h3>
                        <?php 
                            $tabla="pais";
                            $var = "cod_pais";
                            $query = "select * from pais";
                            $tabla2 = str_replace("'","",$tabla);
                            $result = columnas($tabla2,$conexion);
                        ?>

                        <?php require './addCajas.php'?>

                        <h3>Tabla actual</h3>

                        <?php
                            filtro($conexion,$tabla,$query);
                            echo "<br>";
                            tabla($conexion,$tabla,$var);
                        ?>
                        
                    </section>

                </div>

                <input type="radio" name="radio" id="radio3">
                <div class="tab3">
                    <h2>Ciudades</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum porro hic inventore debitis temporibus, rem tenetur quaerat cupiditate. Quibusdam, error quasi! Voluptatem eveniet ad nisi! Consectetur laborum nesciunt omnis placeat.</p>
                </div>

                <input type="radio" name="radio" id="radio4">
                <div class="tab4">
                    <h2>Ciclistas</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum porro hic inventore debitis temporibus, rem tenetur quaerat cupiditate. Quibusdam, error quasi! Voluptatem eveniet ad nisi! Consectetur laborum nesciunt omnis placeat.</p>
                </div>

                <input type="radio" name="radio" id="radio5">
                <div class="tab5">
                    <h2>Equipos</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum porro hic inventore debitis temporibus, rem tenetur quaerat cupiditate. Quibusdam, error quasi! Voluptatem eveniet ad nisi! Consectetur laborum nesciunt omnis placeat.</p>
                </div>

                <input type="radio" name="radio" id="radio6">
                <div class="tab6">
                    <h2>Etapas</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum porro hic inventore debitis temporibus, rem tenetur quaerat cupiditate. Quibusdam, error quasi! Voluptatem eveniet ad nisi! Consectetur laborum nesciunt omnis placeat.</p>
                </div>

                <input type="radio" name="radio" id="radio7">
                <div class="tab7">
                    <h2>Participa</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum porro hic inventore debitis temporibus, rem tenetur quaerat cupiditate. Quibusdam, error quasi! Voluptatem eveniet ad nisi! Consectetur laborum nesciunt omnis placeat.</p>
                </div>

                <input type="radio" name="radio" id="radio8">
                <div class="tab8">
                    <h2>Corre</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum porro hic inventore debitis temporibus, rem tenetur quaerat cupiditate. Quibusdam, error quasi! Voluptatem eveniet ad nisi! Consectetur laborum nesciunt omnis placeat.</p>
                </div>
            </div>
        </div>
        
        
        
    <?php else: ?>
        <h1>No has iniciado sesión!</h1>
    <?php endif;?>

    <?php if(isset($_GET['mes'])):?>
        <script type="text/javascript">
            alert("<?php echo $_GET['mes'];?>");
        </script>
    <?php endif;?>
    


</html>
