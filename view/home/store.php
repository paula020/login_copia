<?php


require_once("c://wamp64/www/login_copia/functions.php");



require_once("c://wamp64/www/login_copia/controller/homeController.php");
$obj = new homeController();
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$confirmarContraseña = $_POST['confirmarContraseña'];
$error = "";
if (empty($correo) || empty($contraseña) || empty($confirmarContraseña)) {
    $error .= "<li>Completa los campos</li>";
    header("Location:signup.php?error=" . $error . "&&correo=" . $correo . "&&contraseña=" . $contraseña . "&&confirmarContraseña=" . $confirmarContraseña);
} else if ($correo && $contraseña && $confirmarContraseña) {
    if ($contraseña == $confirmarContraseña) {




        if (!validar_contrasena($contraseña)) {
            $error .= "<li>debe tener:  </li>";
            $error .= "<li>8 caracteres mínimo, minúsculas y mayúsculas, 1 número y un símbolo</li>";
            header("Location:signup.php?error=" . $error . "&&correo=" . $correo . "&&contraseña=" . $contraseña . "&&confirmarContraseña=" . $confirmarContraseña);
        } else {
            if ($obj->guardarUsuario($correo, $contraseña) == false) {
                $error .= "<li>El correo ya está registrado</li>";
                header("Location:signup.php?error=" . $error . "&&correo=" . $correo . "&&contraseña=" . $contraseña . "&&confirmarContraseña=" . $confirmarContraseña);
            } else {
                header("Location:login.php");
            }
        }
    } else {





        $error .= "<li>Las contraseñas son diferentes</li>";
        header("Location:signup.php?error=" . $error . "&&correo=" . $correo . "&&contraseña=" . $contraseña . "&&confirmarContraseña=" . $confirmarContraseña);
    }

}



?>