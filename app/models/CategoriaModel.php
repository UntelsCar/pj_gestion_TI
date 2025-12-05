<?php

class CategoriaModel extends Model
{

    public function obtenerCategorias($moduloId)
    {
        $stmt = $this->db->prepare("SELECT * FROM categorias WHERE modulo_id = ? ORDER BY codigo");
        $stmt->execute([$moduloId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
