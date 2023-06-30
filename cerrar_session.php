<?php
    # iniciar la session
    session_start();

    #Eliminar cada variable de session
    $_SESSION = array();
    $_SESSION['usuario'];
    $_SESSION['clave'];

    # destruir la session
    session_destroy();

    # redireccionar al inicio
    header('Location: index.php');
    exit;

?>