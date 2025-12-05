<?php

class Auth {

    public static function iniciarSesion() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function verificar() {
        self::iniciarSesion();

        // Si no existe un usuario logueado → bloquear
        if (!isset($_SESSION['usuario'])) {
            header("Location: /py_gestion/public/?url=Login/index");
            exit;
        }

        // Verificar tiempo de inactividad (30 minutos)
        if (time() - $_SESSION['usuario']['last_active'] > 1800) {
            session_destroy();
            header("Location: /py_gestion/public/?url=Login/index&timeout=1");
            exit;
        }

        // Actualizar momento de actividad
        $_SESSION['usuario']['last_active'] = time();
    }

}
