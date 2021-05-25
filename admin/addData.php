<?php require '../conexionDB.php';
    $conexion = conectarbase();

    if(isset($_POST['users'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "INSERT INTO users(email,password_user,fecha_registro) VALUES('$email','$password',current_date)";
        $stmt = pg_query($conexion,$query);
        if(!$stmt){
            die("Hubo un error al registrar la información");
        }
        header("Location: ./user.php");
    }
    else{
        header("Location: ./user.php");
    }
?>
