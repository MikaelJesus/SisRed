<div>
    <h3><?= __('Conmutadores') ?></h3>
    <table>
        <thead>
            <tr>
                <th>Conmutador ID</th>
                <th>Numero de Serie</th>
                <th>Marca</th>
                <th>Numero de Puertos</th>
                <th>Numero de Inventario</th>
                <th>Numero de Equipos</th>
                <th>Fecha de Alta</th>
                <th>Modelo</th>
                <th>Resguardo</th>
                <th>Empleado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($conmutadores as $carrera): ?>
            <tr>
                <td><?= h($carrera->switch_id)?></td>
                <td><?= h($carrera->numero_serie) ?></td>
                <td><?= h($carrera->marca)?></td>
                <td><?= h($carrera->numero_puertos) ?></td>
                <td><?= h($carrera->numero_inventario)?></td>
                <td><?= h($carrera->numero_equipos) ?></td>
                <td><?= h($carrera->fecha_alta)?></td>
                <td><?= h($carrera->modelo) ?></td>
                <td><?= h($carrera->tiporesguardo_tiporesguardo_id)?></td>
                <td><?= h($carrera->empleados_empleado_id) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>