<?php
    require '../header.php';
    $error = false;
    $message = "";
    $var = $_GET['var'];
    $valor = $_GET['valor'];
    $tabla = $_GET['tabla'];
    $tabla = str_replace("'","",$tabla);
    if(isset($_GET['tipo'])){
        $variable = $_GET['tipo'];
        if($variable != 'Columna'){
            if($_GET['cambio'] != ''){
                $valorNew = $_GET['cambio'];
                $query = "UPDATE $tabla SET  $variable='".$valorNew."' WHERE $var=$valor";
                $result = pg_query($conexion,$query);
                if(!$result){
                    die("Hubo un error a la hora de editar el dato");
                }
                else{
                    header("Location: ./user.php");
                }
            }
            else{
                $message = "Ingrese el nuevo dato correctamente";
                $error = true;
            }
        }
        else{
            $message = "Seleccione una columna valida";
            $error = true;
        }

        }
    
?>

<!doctype html>
<html lang="es">
<meta charset="UTF -8" />
    
<head>
    <title>TOUR DE FRANCIA 2021</title>
    <link rel="stylesheet" type="text/css" href="estiloCrud.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="https://www.letour.fr/img/global/logo-reversed@2x.png"/>
</head>

<body>
    <center><h2>Editar registro <?php echo $var;?>=<?php echo $valor;?> de la tabla <?php echo $tabla;?></h2></center>
    <?php if($error):?>
        <center><h2><?php echo $message; ?></h2></center>
    <?php endif; ?>


    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET" class="dato">
    <input hidden type="text" name="tabla" value="<?php echo $tabla;?>" class="tablaE">
    <input hidden type="text" name="valor" value="<?php echo $valor;?>" class="valorE">
    <input hidden type="text" name="var" value="<?php echo $var;?>" class="varE">
    <?php if($tabla === 'users'):?>
            <input type="text" name="cambio" placeholder="Inserte el nuevo dato" autocomplete="off">
            <select name="tipo" class="seleccion">
                <option hidden selected>Columna</option>
                <option value="email">Correo</option>
                <option value="password_user">Contraseña</option>
            </select>
            
            <input type="submit" value="Editar" id="editboton">
            
            
        </form>

        <?php endif;?>

    
    <?php require '../footer.php' ?>

    
</html>
