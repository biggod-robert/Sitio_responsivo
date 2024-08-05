<?php
session_start();
require_once '../../controller/controlSecciones.php';

// Verificar si el usuario está autenticado y es un usuario regular
if (!isset($_SESSION['id_documento']) || $_SESSION['id_categoria'] !== 0) {
    header('Location: ../inicioSesion.php');
    exit;
}

TemplateController::renderHeader('usuario');
?>

<!-- Contenido específico de la sección de usuario -->
<h2>Panel de Usuario</h2>
<p>Contenido de la sección 1 para usuarios.</p>

<?php
TemplateController::renderFooter('usuario');
?>

