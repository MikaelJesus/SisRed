<div>
    <h3><?= __('Pcs') ?></h3>
    <table>
        <thead>
            <tr>
                <th>Pc ID</th>
                <th>Direccion Mac</th>
                <th>Marca</th>
                <th>Modelo de Pc</th>
                <th>Sistema Operativo</th>
                <th>Nombre en la Red</th>
                <th>Grupo de Trabajo</th>
                <th>Direccion de IP</th>
                <th>Antivirus</th>
                <th>Nodo</th>
                <th>Edificio</th>
                <th>Piso</th>
                <th>Fecha de Alta</th>
                <th>Marca del Procesador</th>
                <th>Modelo del Procesador</th>
                <th>Velocidad del Procesador</th>
                <th>Capacidad del Disco</th>
                <th>Capacidad de la RAM</th>
                <th>Empleado</th>
                <th>Resguardo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pcs as $carrera): ?>
            <tr>
                <td><?= h($carrera->pc_id)?></td>
                <td><?= h($carrera->direccion_mac) ?></td>
                <td><?= h($carrera->marca)?></td>
                <td><?= h($carrera->modelo_pc) ?></td>
                <td><?= h($carrera->sistema_operativo) ?></td>
                <td><?= h($carrera->nombre_red)?></td>
                <td><?= h($carrera->grupo_trabajo) ?></td>
                <td><?= h($carrera->ip) ?></td>
                <td><?= h($carrera->antivirus) ?></td>
                <td><?= h($carrera->nodo) ?></td>
                <td><?= h($carrera->edificio) ?></td>
                <td><?= h($carrera->piso) ?></td>
                <td><?= h($carrera->fecha_alta)?></td>
                <td><?= h($carrera->marca_procesador) ?></td>
                <td><?= h($carrera->modelo_procesador) ?></td>
                <td><?= h($carrera->velocidad_procesador) ?></td>
                <td><?= h($carrera->capacidad_disco) ?></td>
                <td><?= h($carrera->capacidad_ram) ?></td>
                <td><?= h($carrera->empleados_empleado_id) ?></td>
                <td><?= h($carrera->tiporesguardo_tiporesguardo_id)?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>