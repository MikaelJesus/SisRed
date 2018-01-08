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
            <?php foreach ($empleados as $carrera): ?>
            <tr>
                <td><?= h($carrera->empleado_id)?></td>
                <td><?= h($carrera->nue) ?></td>
                <td><?= h($carrera->nup)?></td>
                <td><?= h($carrera->nombre) ?></td>
                <td><?= h($carrera->apellidop)?></td>
                <td><?= h($carrera->apellidom) ?></td>
                <td><?= h($carrera->curp)?></td>
                <td><?= h($carrera->rfc) ?></td>
                <td><?= h($carrera->categorias_categoria_id)?></td>
                <td><?= h($carrera->dependencias_dependencia_id) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>