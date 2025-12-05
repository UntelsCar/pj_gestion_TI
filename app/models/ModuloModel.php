<?php

class ModuloModel extends Model
{
    public function obtenerModulo($moduloId = 1)
    {
        // Obtener info del módulo
        $stmt = $this->db->prepare("SELECT * FROM modulos WHERE id = ?");
        $stmt->execute([$moduloId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function obtenerCategorias($moduloId)
    {
        $stmt = $this->db->prepare("SELECT * FROM categorias WHERE modulo_id = ? ORDER BY codigo");
        $stmt->execute([$moduloId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerItemsPorCategoria($categoriaId)
    {
        $stmt = $this->db->prepare("SELECT * FROM items WHERE categoria_id = ? ORDER BY codigo");
        $stmt->execute([$categoriaId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerCamposPorItem($itemId)
    {
        $stmt = $this->db->prepare("SELECT * FROM campos WHERE item_id = ? LIMIT 1");
        $stmt->execute([$itemId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
