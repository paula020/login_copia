<?php
require_once("c://wamp64/www/login_copia/view/head/header.php");
if (empty($_SESSION['usuario'])) {
    header("Location:login.php");
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con Imágenes</title>


    <body>
    
    <!-- Título con estilo estilizado y animación -->
    <h1 class="titulo-estilizado">Bienvenido <?= $_SESSION['usuario'] ?>  </h1>
<span class="animacion-usuario">Así funciona nuestro ChatBot </span>

<div class="container">
    <div class=" image-container">
        <img src="https://th.bing.com/th/id/R.7d9b1d662b28cd365b33a01a3d0288e1?rik=2v0xwnJ1BLPFyQ&pid=ImgRaw&r=0" alt="Descripción de la imagen" width="500">
    </div>
    <div class="wrapper">
    <img src="/login_copia/videologin.gif" alt="Descripción de la imagen" width="700">


    <!-- <video width="640" height="360" controls>
        <source src="/login_copia/chat.mp4" type="video/mp4">
        Tu navegador no soporta la reproducción de video.
    </video> -->
</body>


    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: white; /* Fondo blanco */
            overflow: hidden;
        }

        .container {
    display: flex;
   
 
}


.animacion-usuario {
    font-family: 'Pacifico', cursive; /* Puedes usar la misma fuente personalizada */
    color: black; /* Cambia el color si es necesario */
    animation: bounce 2s infinite; /* Animación llamada "bounce" */
}

/* Definir la animación "bounce" */
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-20px);
    }
    60% {
        transform: translateY(-10px);
    }
}


.titulo-estilizado {
            font-family: 'Pacifico', cursive; /* Fuente personalizada de Google Fonts */
            color: rgb(194, 165, 37);
            animation: bounce 2s infinite; /* Animación llamada "bounce" */
        }

        /* Definir la animación "bounce" */
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-20px);
            }
            60% {
                transform: translateY(-10px);
            }
        }



.image-container {
   
 
}



.wrapper{
    
}



        


<?php
require_once("c://wamp64/www/login_copia/view/head/footer.php");
?>

