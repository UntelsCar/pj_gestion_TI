<?php

class ItemModel extends Model
{

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

    public function contarItemsCategoria($categoriaId)
    {
        $stmt = $this->db->prepare("SELECT COUNT(*) AS total FROM items WHERE categoria_id = ?");
        $stmt->execute([$categoriaId]);
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function contarItemsCumplidosCategoria($categoriaId)
    {
        $stmt = $this->db->prepare("
            SELECT COUNT(*) AS total
            FROM campos c
            INNER JOIN items i ON c.item_id = i.id
            WHERE i.categoria_id = ? AND c.cumplio = 'SI'
        ");
        $stmt->execute([$categoriaId]);
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function contarItemsModulo($moduloId)
    {
        $stmt = $this->db->prepare("
            SELECT COUNT(*) AS total
            FROM items i
            INNER JOIN categorias c ON i.categoria_id = c.id
            WHERE c.modulo_id = ?
        ");
        $stmt->execute([$moduloId]);
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function contarItemsCumplidosModulo($moduloId)
    {
        $stmt = $this->db->prepare("
            SELECT COUNT(*) AS total
            FROM campos c
            INNER JOIN items i ON c.item_id = i.id
            INNER JOIN categorias cat ON i.categoria_id = cat.id
            WHERE cat.modulo_id = ? AND c.cumplio = 'SI'
        ");
        $stmt->execute([$moduloId]);
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function guardarCampos($itemId, $cumplio, $descripcion, $fecha, $observaciones, $evidenciaNombre, $evidenciaRuta)
    {
        // Verificar si ya existe registro
        $stmt = $this->db->prepare("SELECT id FROM campos WHERE item_id = ?");
        $stmt->execute([$itemId]);

        if ($stmt->fetch()) {
            // UPDATE
            $sql = "UPDATE campos 
                    SET cumplio=?, descripcion=?, fecha_cumplimiento=?, observaciones=?, evidencia_nombre=?, evidencia_ruta=?
                    WHERE item_id=?";
            $this->db->prepare($sql)->execute([$cumplio, $descripcion, $fecha, $observaciones, $evidenciaNombre, $evidenciaRuta, $itemId]);
        } else {
            // INSERT
            $sql = "INSERT INTO campos (item_id, cumplio, descripcion, fecha_cumplimiento, observaciones, evidencia_nombre, evidencia_ruta)
                    VALUES (?,?,?,?,?,?,?)";
            $this->db->prepare($sql)->execute([$itemId, $cumplio, $descripcion, $fecha, $observaciones, $evidenciaNombre, $evidenciaRuta]);
        }
    }
}
