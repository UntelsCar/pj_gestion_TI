<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $modulo['codigo'] ?> - <?= $modulo['nombre'] ?></title>
</head>

<body>

    <a href="?url=Menu/index">VOLVER</a>

    <h2><?= $modulo['codigo'] ?> - <?= $modulo['nombre'] ?></h2>

    <form action="?url=PlanificacionGestionCostos/guardar/{modulo_id}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="modulo_id" value="<?= $modulo['id'] ?>">
        <table border="1" cellpadding="5" cellspacing="0">

            <tr>
                <th colspan="2"><?= $modulo['codigo'] ?> <strong><?= $modulo['nombre'] ?></strong></th>
                <th>Cumplió</th>
                <th>Descripción</th>
                <th>Fecha de Cumplimiento</th>
                <th>Evidencia</th>
                <th>Observaciones</th>
            </tr>

            <?php foreach ($categorias as $categoria): ?>

                <!-- fila de categoria -->
                <tr>
                    <td><?= $categoria['codigo'] ?></td>
                    <td><strong><?= $categoria['nombre'] ?></strong></td>
                    <td></td><td></td><td></td><td></td><td></td>
                </tr>

                <?php foreach ($categoria['items'] as $item): ?>

                    <tr>
                        <td><?= $item['codigo'] ?></td>
                        <td><?= $item['nombre'] ?></td>

                        <?php $c = $item['campos']; ?>

                        <td>
                            <select name="cumplio[<?= $item['id'] ?>]">
                                <option value="">--</option>
                                <option value="SI" <?= ($c['cumplio'] ?? '') == 'SI' ? 'selected' : '' ?>>SI</option>
                                <option value="NO" <?= ($c['cumplio'] ?? '') == 'NO' ? 'selected' : '' ?>>NO</option>
                            </select>
                        </td>

                        <td>
                            <input type="text" name="descripcion[<?= $item['id'] ?>]" 
                                value="<?= $c['descripcion'] ?? '' ?>">
                        </td>

                        <td>
                            <input type="date" name="fecha_cumplimiento[<?= $item['id'] ?>]"
                                value="<?= $c['fecha_cumplimiento'] ?? '' ?>">
                        </td>

                        <td>
                            <?php if (!empty($c['evidencia_ruta'])): ?>
                                <a href="<?= $c['evidencia_ruta'] ?>" target="_blank">Ver archivo</a><br>
                            <?php endif; ?>

                            <input type="file" name="evidencia[<?= $item['id'] ?>]">
                        </td>

                        <td>
                            <input type="text" name="observaciones[<?= $item['id'] ?>]"
                                value="<?= $c['observaciones'] ?? '' ?>">
                        </td>
                    </tr>

                <?php endforeach; ?>

            <?php endforeach; ?>
                        <!-- TOTALES DEL MÓDULO -->
            <tr>
                <td colspan="2"><strong>TOTAL AVANCE <?= $modulo['nombre'] ?> EN DECIMAL</strong></td>
                <td><?= $total_modulo_decimal ?></td>
            </tr>

            <tr>
                <td colspan="2"><strong>TOTAL AVANCE <?= $modulo['nombre'] ?> PORCENTUAL</strong></td>
                <td><?= number_format($total_modulo_porcentual, 2) ?>%</td>
            </tr>

            <?php foreach ($categorias as $cat): ?>
                <tr>
                    <td colspan="2">Total Avance <?= $cat['nombre'] ?> en decimal</td>
                    <td><?= $cat['avance_decimal'] ?></td>
                </tr>

                <tr>
                    <td colspan="2">Total Avance <?= $cat['nombre'] ?> en Porcentual</td>
                    <td><?= number_format($cat['avance_porcentual'], 2) ?>%</td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="7" style="text-align:center;">
                    <button type="submit">Guardar Cambios</button>
                </td>
            </tr>

        </table>
    </form>
    
</body>
</html>
