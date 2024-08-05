<?php
require_once 'BdConect.php';

class User
{
    public $id_documento;
    public $correo;
    public $clave;
    public $id_categoria;

    public static function authenticate($correo, $clave)
    {
        // Conectar a la base de datos
        $db = conexionBD::getInstance()->getConnection();

        // Preparar la consulta
        $stmt = $db->prepare("SELECT id_documento, id_categoria, correo, clave  FROM usuarios WHERE correo = :correo");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_OBJ);

        /*echo '<pre>';
        var_dump($user);
        echo '</pre>';
        exit;*/



        // Verificar la contraseña
        if ($user && password_verify($clave, $user->clave)) {
            // Retornar el objeto User con propiedades id_documento y id_categoria
            $authenticatedUser = new User();
            $authenticatedUser->id_documento = $user->id_documento;
            $authenticatedUser->id_categoria = $user->id_categoria;
            $authenticatedUser->correo = $user->correo;
            $authenticatedUser->clave = $user->clave;

            return $authenticatedUser;
        } else {
            return false;
        }
    }

    public static function registrar($documento, $nombre, $apellido, $correoUsuario, $clave, $edad, $fecha_nacimiento, $telefono)
    {
        $db = conexionBD::getInstance()->getConnection();

        $sql = "INSERT INTO usuarios (id_documento, id_categoria, nombre_p, apellido_p, correo, clave, edad, f_nacimiento, telefono) 
                VALUES (:documento, :id_categoria, :nombre, :apellido, :correoUsuario, :clave, :edad, :fecha_nacimiento, :telefono)";

        $stmt = $db->prepare($sql);

        // Encriptar la clave antes de guardarla en la base de datos
        $hashedPassword = password_hash($clave, PASSWORD_DEFAULT);

        $id_categoria = 0; // Por defecto, se asigna como usuario regular

        $stmt->bindParam(':documento', $documento);
        $stmt->bindParam(':id_categoria', $id_categoria);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':correoUsuario', $correoUsuario);
        $stmt->bindParam(':clave', $hashedPassword);
        $stmt->bindParam(':edad', $edad);
        $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento);
        $stmt->bindParam(':telefono', $telefono);


        if ($stmt->execute()) {
            header("Location: ../vista/USUARIO/seccion1.php");
            exit();
        } else {
            die('Error al registrar el usuario.');
        }
    }
}

