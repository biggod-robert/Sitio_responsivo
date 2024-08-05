<?php
session_start();
require_once '../modelo/User.php';

class AuthController
{
    public function login()
    {
        if (isset($_SESSION['id_documento'])) {
            // Redirigir según el id_categoria
            if ($_SESSION['id_categoria'] === 1) { // Admin
                header('Location: ../vista/ADMIN/seccion1.php');
            } else { // Usuario
                header('Location: ../vista/USUARIO/seccion1.php');
            }
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            $captchaInput = $_POST['captchaInput'];
            $captchaHidden = $_POST['captchaHidden'];

            // Validar CAPTCHA
            if ($captchaInput !== $captchaHidden) {
                header('Location: ../vista/inicioSesion.php?error=captcha');
            }

            // Autenticar usuario
            $user = User::authenticate($correo, $clave);
            if ($user) {
                $_SESSION['id_documento'] = $user->id_documento;
                $_SESSION['id_categoria'] = $user->id_categoria;



                // Redirigir según el id_categoria
                if ($user->id_categoria == 1) { // Admin
                    header('Location: ../vista/ADMIN/seccion1.php');
                } else { // Usuario
                    header('Location: ../vista/USUARIO/seccion1.php');
                }
                exit;
            } else {
                header('Location: ../vista/inicioSesion.php?error=credentials');
                exit;
            }
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $documento = $_POST['id_documento'];
            $nombre = $_POST['nombre_p'];
            $apellido = $_POST['apellido_p'];
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            $edad = $_POST['edad'];
            $fecha_nacimiento = $_POST['f_nacimiento'];
            $telefono = $_POST['telefono'];

            // Aquí podrías agregar más validaciones si es necesario

            User::registrar($documento, $nombre, $apellido, $correo, $clave, $edad, $fecha_nacimiento, $telefono);
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: ../vista/principal.php');
        exit;
    }
}

// Enrutamiento básico
$action = isset($_GET['action']) ? $_GET['action'] : '';
$authController = new AuthController();

switch ($action) {
    case 'login':
        $authController->login();
        break;
    case 'register':
        $authController->register();
        break;
    case 'logout':
        $authController->logout();
        break;
    default:
        header('Location: ../vista/principal.php');
        break;
}