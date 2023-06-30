<?php
    session_start();
    include("conexion.php");
    if(!isset($_SESSION['usuario'])){
        $_SESSION['usuario'] = '';
        $_SESSION['clave'] = '';

        header('Location: index.php');
        exit;
    }

    if(isset($_POST['hidden'])){
        if(strlen($_POST['usuario']) > 1 && strlen($_POST['clave'])){
            $_SESSION['usuario'] = trim(htmlentities($_POST['usuario']));
            $_SESSION['clave'] = md5(trim(htmlentities($_POST['clave'])));

          
                # realizar la consulta para ingresar los datos puestos en el formulario a la base de datos
                $query = "SELECT usuario, clave FROM usuarios WHERE usuario = '$_SESSION[usuario]' AND clave = '$_SESSION[clave]'";
                $result = mysqli_query($connect, $query);
                if($result) {
                    header('Location: pagina.php');
                }else{
                    header('Location: index.php');
                }

        }else{
            echo 'Los campos estan vacios';
        }
    }
?>