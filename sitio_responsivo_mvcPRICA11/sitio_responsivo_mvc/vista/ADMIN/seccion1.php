<?php
session_start();
require_once '../../controller/controlSecciones.php';

// Verificar si el usuario está autenticado y es administrador
if (!isset($_SESSION['id_documento']) || $_SESSION['id_categoria'] !== 1) {
    header('Location: ../inicioSesion.php');
    exit;
}

TemplateController::renderHeader('admin');
?>

<!-- Contenido específico de la sección de administrador -->
<h2>Panel de Administración</h2>
<p>Contenido de la sección 1 para administradores.</p>

<?php
TemplateController::renderFooter('admin');
?>


<link rel="stylesheet" type="text/css" href="../../css/seccion1.css">

<div class="container">
        <div class="sidebar">
        <img src="../../img/b.png" alt="Logo">
            <h3>Agrega tu sitio</h3>
            <ul class="menu">
                <li><a href="#titulo">Título</a></li>
                <li><a href="#informacion">Información de tu sitio</a></li>
                <li><a href="#imagen">Imagen</a></li>
                <li><a href="#sitio">Sitio web</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="header">
                <img src="../../img/u.png" alt="Logo" style="width: 50px; height: auto;">
                <h1>Hola usuario</h1>
            </div>
            <div class="content" id="titulo">
                <div class="box">
                    <h2>ESCRIBE UN TITULO</h2>
                    <div class="form-container">
                        <form action="procesar_formulario.php" method="POST">
                            <label for="titulo">Título:</label>
                            <input type="text" id="titulo" name="titulo" placeholder="Ingrese el título" required>
                            <input type="submit" value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
            <div class="content" id="imagen">
                <div class="box-light">
                    <h2>AÑADE IMAGEN</h2>
                    <div class="form-container">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <label for="imagen">Subir imagen:</label>
                            <input type="file" id="imagen" name="imagen" accept="image/*" required>
                            <input type="submit" value="Subir imagen">
                        </form>
                    </div>
                </div>
            </div>
            <div class="content" id="informacion">
                <div class="box">
                    <h2>AÑADE INFORMACION DE TU SITIO</h2>
                    <div class="form-container">
                        <form action="#" method="POST">
                            <label for="informacion">Información:</label>
                            <textarea id="informacion" name="informacion" rows="4" placeholder="Ingrese información sobre su sitio" required></textarea>
                            <input type="submit" value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
            <div class="content" id="sitio">
                <div class="box-light">
                    <h2>AÑADE EL ENLACE A TU SITIO WEB</h2>
                    <div class="form-container">
                        <form action="#" method="POST">
                            <label for="sitioWeb">URL del sitio web:</label>
                            <input type="url" id="sitioWeb" name="sitioWeb" placeholder="https://www.ejemplo.com" required>
                            <input type="submit" value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>