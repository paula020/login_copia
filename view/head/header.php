
<?php
require_once("c://wamp64/www/login_copia/view/head/head.php");

?>

<!-- <div class="fondoo"> -->
<link rel="stylesheet" href="style.css">

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="/login_copia/view/home/panel_control.php">Inicio</a>
             
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php if (empty($_SESSION['usuario'])): ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login_copia/view/home/login.php">Precios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login_copia/Pagina_Web/indexP.html">Contactanos</a>
                            </li>
                        </ul>
                        <a href="/login_copia/view/home/login.php" class="boton">Inicia Session</a>
                        <a href="/login_copia/view/home/signup.php" class="boton">Registrate</a>
                    </div>
                <?php else: ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           
                            <li class="nav-item">
                                <a class="nav-link" href="/login_copia/indexcopy.php">ChatBot</a>
                               
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login_copia/mas.php">Session de recursos</a>
                               
                            </li>
                        </ul>
                        <a href="/login_copia/view/home/logout.php" class="boton">Cerrar Sesion</a>
                    </div>
                <?php endif ?>

            </div>
        </nav>
    </div>


</div>


















<div class="fondo">


<style>
.fondoo {

    
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 200% 100%; /* Cambiamos el segundo valor a 100% para que sea infinito horizontalmente */
  animation: gradient 15s linear infinite; /* Usamos 'linear' para una animación constante y 'infinite' para que sea infinita */
  width: 100%;
}
  
  
  @keyframes gradient {
      0% {
          background-position: 0% 50%;
      }
  
      50% {
          background-position: 100% 50%;
      }
  
      100% {
          background-position: 0% 50%;
      }
    }
.container-fluid {
    background: linear-gradient(-45deg, #52EE52, #3CDCE7, #23a6d5, #23d5ab);
      background-size: 200% 200%;
      animation: gradient 15s ease infinite;
    width:100%;
  }
  
  
  @keyframes gradient {
      0% {
          background-position: 0% 50%;
      }
  
      50% {
          background-position: 100% 50%;
      }
  
      100% {
          background-position: 0% 50%;
      }
    }







    
    </style>

