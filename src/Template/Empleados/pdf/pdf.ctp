<div>
    <h3><?= __('Conmutadores') ?></h3>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nue</th>
                <th>Nup</th>
                <th>Curp</th>
                <th>Rfc</th>
                <th>Clave de Proyecto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $carrera): ?>
            <tr>
            <td><?= h($carrera->nombre.$carrera->apellidop.$carrera->apellidom) ?></td>
                <td><?= h($carrera->nue) ?></td>
                <td><?= h($carrera->nup)?></td>
                <td><?= h($carrera->curp)?></td>
                <td><?= h($carrera->rfc) ?></td>
                <td><?= h($carrera->departamentos_departamento_id)?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>