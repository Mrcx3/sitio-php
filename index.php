<?php
// OBLIGAR AL SERVIDOR A MOSTRAR ERRORES (Opcional, para desarrollo)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 1. Iniciamos la memoria del servidor
session_start();

// 2. Traemos la parte de arriba de la pagina
require_once 'vistas/components/header.php';
require_once 'vistas/components/navbar.php';

// 3. LOGICA DEL ENRUTADOR (Semaforo de pantallas)
if (isset($_GET["ruta"])) 
{
    // Evaluamos exactamente que palabra viene en la URL
    if ($_GET["ruta"] == "inicio") 
    {
        require_once 'vistas/inicio.php';
    } 
    else if ($_GET["ruta"] == "login") 
    {
        require_once 'vistas/login.php';
    }
    else if ($_GET["ruta"] == "registro") 
    {
        require_once 'vistas/registro.php';
    }
    else if ($_GET["ruta"] == "galeria") 
    {
        require_once 'vistas/galeria.php';
    }
    else 
    {
        // Si escriben una ruta que no existe, forzamos ir al inicio
        require_once 'vistas/inicio.php';
    }
} 
else 
{
    // Si entran sin ruta (ejemplo: localhost/01-PAGINA/), cargamos el inicio
    require_once 'vistas/inicio.php';
}

// 4. Traemos la parte de abajo de la pagina
require_once 'vistas/components/modals.php';
require_once 'vistas/components/footer.php';
?>