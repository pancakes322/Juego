<?php
    session_start();
    include("conexion.php");
    if(!isset($_SESSION['usuario'])){
        $_SESSION['usuario'] = '';
        $_SESSION['correo'] = '';
        $_SESSION['clave'] = '';

        header('Location: registro.php');
        exit;
    }

    if(isset($_POST['hidden'])){
        if(strlen($_POST['usuario']) > 1 && strlen($_POST['correo']) > 1 && strlen($_POST['clave']) > 1 && strlen($_POST['confir_clave']) > 1){
            $_SESSION['usuario'] = trim(htmlentities($_POST['usuario']));
            $_SESSION['correo'] = trim(htmlentities($_POST['correo']));
            $_SESSION['clave'] = md5(trim(htmlentities($_POST['clave'])));

            try{
                # realizar la consulta para ingresar los datos puestos en el formulario a la base de datos
                $query = "INSERT INTO usuarios(usuario, correo, clave) VALUES ('$_SESSION[usuario]', '$_SESSION[correo]', '$_SESSION[clave]')";
                $result = mysqli_query($connect, $query);
                if($result) {
                    header('Location: pagina.php');
                }else{
                    header('Location: registro.php');
                }
            }catch(mysqli_sql_exception $e){
                echo $e;
            }

            
            
        }
    }
?>