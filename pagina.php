<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        $_SESSION['usuario'] = '';
        $_SESSION['correo'] = '';
        $_SESSION['clave'] = '';

        header('Location: index.php');
    }
    // variables de session
    $usuario = $_SESSION['usuario'];
    $clave = $_SESSION['clave'];

    // inicial del nombre en la burbuja
    $inicial = strtoupper(substr($usuario, 0, 1));
    // almacenar la variable iniciar en una variable de session
    $_SESSION['inicial'] = $inicial;
    $inicial = $_SESSION['inicial'];
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $usuario ?></title>
    <!-- Estilos -->
    <link rel="stylesheet" href="css/inicio.css">
</head>
<body>
    <?php include "header2.php"; ?>
    <!-- Boton de cerrar session -->
    <form action="cerrar_session.php" method="post">
        <input type="submit" value="Cerrar sesion">
    </form>

    <!-- Mensaje de bienvenida -->
    <div id="message-bienvenida">
        <p>
            ¡Hola <strong><?php echo $usuario ?></strong>!
        </p>
    </div>

    <!-- script -->
    <script src="js/mensaje-bienvenida.js"></script>
</body>
</html>