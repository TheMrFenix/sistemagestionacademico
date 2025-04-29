<?php
include ('../../../app/config.php');
$nombre_rol = htmlspecialchars($_POST['nombre_rol'], ENT_QUOTES, 'UTF-8');
$nombre_rol = mb_strtoupper($nombre_rol, 'UTF-8');
if ($nombre_rol == "") {
    session_start();
    $_SESSION['mensaje'] = "Ingrese el nombre del rol";
    $_SESSION['icono'] = "error";
    header('Location:'.APP_URL."/admin/roles/create.php");
} else {
    $sentencia = $pdo->prepare("INSERT INTO roles 
        (nombre_rol, fyh_creacion, estado)
    VALUES (:nombre_rol,:fyh_creacion,:estado)");
    $sentencia->bindParam('nombre_rol', $nombre_rol);
    $sentencia->bindParam('fyh_creacion', $fechaHora);
    $sentencia->bindParam('estado', $estado_de_registro);  
    try {
        if ($sentencia->execute()) {
            session_start();
            $_SESSION['mensaje'] = "Rol registrado correctamente";
            $_SESSION['icono'] = "success";
            header('Location:'.APP_URL."/admin/roles");
        } else {
            session_start();
            $_SESSION['mensaje'] = "Error al registrar el rol, comuniquese con el administrador del sistema";
            $_SESSION['icono'] = "error";
            header('Location:'.APP_URL."/admin/roles/create.php");
        }
    } catch (Exception $exception) {
        session_start();
            $_SESSION['mensaje'] = "Este rol ya existe en la base de datos, por favor ingrese otro nombre";
            $_SESSION['icono'] = "error";
            header('Location:'.APP_URL."/admin/roles/create.php");
    }
}
?>