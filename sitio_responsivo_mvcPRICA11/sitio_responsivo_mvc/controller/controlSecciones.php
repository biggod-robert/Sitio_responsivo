<?php
class TemplateController {
    public static function renderHeader($userType = 'guest') {
        switch ($userType) {
            case 'usuario':
                include '../vista/USUARIO/plantillaUser.php';
                break;
            case 'admin':
                include '../vista/ADMIN/plantillaAdmin.php';
                break;
            default:
                include '../vista/header.php';
                break;
        }
    }

    public static function renderFooter($userType = 'guest') {
        switch ($userType) {
            case 'usuario':
                include '../vista/USUARIO/footerUser.php';
                break;
            case 'admin':
                include '../vista/ADMIN/footerAdmin.php';
                break;
            default:
                include '../vista/footer.php';
                break;
        }
    }
}
?>