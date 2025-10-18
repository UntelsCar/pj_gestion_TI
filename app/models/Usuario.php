<?php

class Usuario extends Model {

    public function buscarPorCorreo($correo) {
        $query = $this->db->prepare("
            SELECT u.*, r.nombre AS rol_nombre
            FROM usuarios u
            INNER JOIN roles r ON u.rol_id = r.id
            WHERE u.correo = :correo
            LIMIT 1
        ");
        $query->bindParam(":correo", $correo);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function obtenerTodos() {
        $query = $this->db->prepare("
            SELECT u.*, r.nombre AS rol_nombre
            FROM usuarios u
            INNER JOIN roles r ON u.rol_id = r.id
        ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}