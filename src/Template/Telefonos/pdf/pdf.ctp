<div>
    <h3><?= __('Telefonos') ?></h3>
    <table>
        <thead>
            <tr>
                <th>Telefono ID</th>
                <th>Mac del Telefono</th>
                <th>Extencion del Telefono</th>
                <th>Modelo de Telefono</th>
                <th>Numero de Serie</th>
                <th>Numero de Inventario</th>
                <th>Fecha de Alta</th>
                <th>Empleado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($telefonos as $carrera): ?>
            <tr>
                <td><?= h($carrera->telefono_id)?></td>
                <td><?= h($carrera->mac_telefono) ?></td>
                <td><?= h($carrera->extencion_telefono) ?></td>
                <td><?= h($carrera->modelo_telefono) ?></td>
                <td><?= h($carrera->numero_serie) ?></td>
                <td><?= h($carrera->numero_inventario)?></td>
                <td><?= h($carrera->fecha_alta)?></td>
                <td><?= h($carrera->empleados_empleado_id) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>