<?php
class Database {
    private static $instance = null;

    public static function getConnection() {
        if (!self::$instance) {
            try {
                self::$instance = new PDO(
                    "mysql:host=127.0.0.1;port=3307;dbname=gestion_bd;charset=utf8",
                    "root", // usuario por defecto en XAMPP
                    ""       // contraseña vacía por defecto
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
