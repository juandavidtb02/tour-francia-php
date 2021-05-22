<?php 

    require '../header.php';
    $clave1= 'rout';
    $message='';
    

    if(!empty($_POST['email']) && !empty($_POST['password'])){

        $email1 = $_POST['email'];
        $password1 = $_POST['password'];
        $consulta1 = "SELECT * FROM users WHERE email='".$email1."' ";
        $results1 = pg_query($conexion,$consulta1);
        if($results1 && pg_num_rows($results1) > 0){
            $message = "El correo ya ha sido registrado.";
        }
        else{
            if($_POST['password'] === $_POST['confirm_password']){
                if($_POST['clave'] === $clave1 ){
                    $consulta = "INSERT INTO users(email,password_user,fecha_registro) VALUES('".$email1."','".$password1."',current_date)";
                    $stmt = pg_query($conexion,$consulta);
                    if($stmt){
                        $message = "Registro exitoso.";
                    }
                    else {
                    $message = "No se pudo completar el registro correctamente";
                    }
                }
                else {
                    $message = "Codigo de admin incorrecto. Para más información comunícate con los desarrolladores.";
                }
            }
            else{
                $message = "Las contraseñas no coinciden.";
            }
        }
        
        

    }
?>


<!doctype html>
<html lang="es">
<meta charset="UTF -8" />
    
<head>
    <title>TOUR DE FRANCIA 2021</title>
    <link rel="stylesheet" type="text/css" href="estiloLogin.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="https://www.letour.fr/img/global/logo-reversed@2x.png"/>
</head>

<body>
    
    

    <?php if($message != 'Registro exitoso.'):?>

    <h1>Registro para administrador de la base de datos</h1>
    <form action="signup.php" method="post">
        <input type="text" name="email" placeholder="Digite el correo" autocomplete="off">
        <input type="password" name="password" placeholder="Digite la contraseña">
        <input type="password" name="confirm_password" placeholder="Confirme la contraseña">
        <input type="password" name="clave" placeholder="Ingrese el código de admin">
        <input type="submit" value="Registrarse">
    </form>

    <?php endif; ?>

    <?php if(!empty($message)):?>
        <p><?php echo $message ?> </p>
    <?php endif; ?>
    

    <p>¿Ya tienes una cuenta? <a href="./login.php">¡Inicia sesión!</p></a>

    <br><br><br><br>
</body>
    
<?php require '../footer.php' ?>

    
</html>
