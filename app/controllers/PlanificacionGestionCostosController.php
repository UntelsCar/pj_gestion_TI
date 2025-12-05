<?php

class PlanificacionGestionCostosController extends Controller
{   

    public function __construct() {
        Auth::verificar();
    }

    public function index($moduloId)
    {     
        $modeloModulo = $this->model("ModuloModel");
        $modeloCategoria = $this->model("CategoriaModel");
        $modeloItem = $this->model("ItemModel");

        // $moduloId = 1; // Ejemplo: el módulo 4.1 tiene ID = 1 en BD

        $modulo = $modeloModulo->obtenerModulo($moduloId);
        $categorias = $modeloCategoria->obtenerCategorias($moduloId);

        // Para cada categoría, obtener items y sus campos
        foreach ($categorias as &$categoria) {
            $items = $modeloItem->obtenerItemsPorCategoria($categoria['id']);
            foreach ($items as &$item) {
                $item['campos'] = $modeloItem->obtenerCamposPorItem($item['id']);
            }
            $categoria['items'] = $items;

            // Datos de avance por categoría
            $categoria['total_items'] = $modeloItem->contarItemsCategoria($categoria['id']);
            $categoria['total_cumplidos'] = $modeloItem->contarItemsCumplidosCategoria($categoria['id']);
            $categoria['avance_decimal'] = $categoria['total_cumplidos'];
            $categoria['avance_porcentual'] = $categoria['total_items'] > 0 
                ? ($categoria['total_cumplidos'] / $categoria['total_items']) * 100 
                : 0;
        }

        // Totales del módulo
        $totalItemsModulo = $modeloItem->contarItemsModulo($moduloId);
        $totalCumplidosModulo = $modeloItem->contarItemsCumplidosModulo($moduloId);

        $data = [
            "modulo" => $modulo,
            "categorias" => $categorias,
            "total_modulo_decimal" => $totalCumplidosModulo,
            "total_modulo_porcentual" => $totalItemsModulo > 0 ? ($totalCumplidosModulo / $totalItemsModulo) * 100 : 0
        ];

        $this->view('Gestion_Costos_Proyecto/Index', $data);
    }

    public function guardar()
    {
        $modeloItem = $this->model("ItemModel");

        foreach ($_POST['cumplio'] as $itemId => $valorCumplio) {

            $descripcion = $_POST['descripcion'][$itemId] ?? null;
            $fecha = $_POST['fecha_cumplimiento'][$itemId] ?? null;
            $observaciones = $_POST['observaciones'][$itemId] ?? null;

            // *** Evidencia ***
            $evidenciaNombre = null;
            $evidenciaRuta = null;

            if (!empty($_FILES['evidencia']['name'][$itemId])) {
                $nombreArchivo = $_FILES['evidencia']['name'][$itemId];
                $tmpFile = $_FILES['evidencia']['tmp_name'][$itemId];

                $rutaDestino = "uploads/" . time() . "_" . $nombreArchivo;
                move_uploaded_file($tmpFile, $rutaDestino);

                $evidenciaNombre = $nombreArchivo;
                $evidenciaRuta = $rutaDestino;
            }

            // Guardar en BD
            $modeloItem->guardarCampos($itemId, $valorCumplio, $descripcion, $fecha, $observaciones, $evidenciaNombre, $evidenciaRuta);
        }

        // redirigir nuevamente al módulo
        header("Location: ?url=PlanificacionGestionCostos/index");
    }
}
