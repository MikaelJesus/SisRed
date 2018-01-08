<div>
    <h3><?= __('Impresoras') ?></h3>
    <table>
        <thead>
            <tr>
                <th>Impresora ID</th>
                <th>Numero de Serie</th>
                <th>Marca</th>
                <th>modelo</th>
                <th>mac_impresora</th>
                <th>ip_impresora</th>
                <th>Numero de Inventario</th>
                <th>Fecha de Alta</th>
                <th>Velocidad de Imprecion</th>
                <th>Nodo</th>
                <th>Empleado</th>
                <th>Resguardo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($impresoras as $carrera): ?>
            <tr>
                <td><?= h($carrera->impresora_id)?></td>
                <td><?= h($carrera->numero_serie) ?></td>
                <td><?= h($carrera->marca)?></td>
                <td><?= h($carrera->modelo) ?></td>
                <td><?= h($carrera->mac_impresora) ?></td>
                <td><?= h($carrera->ip_impresora)?></td>
                <td><?= h($carrera->numero_inventario) ?></td>
                <td><?= h($carrera->fecha_alta)?></td>
                <td><?= h($carrera->velocidad_imprecion) ?></td>
                <td><?= h($carrera->nodo) ?></td>
                <td><?= h($carrera->empleados_empleado_id) ?></td>
                <td><?= h($carrera->tiporesguardo_tiporesguardo_id)?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>