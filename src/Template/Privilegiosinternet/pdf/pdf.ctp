<div>
    <h3><?= __('Privilegios') ?></h3>
    <table>
        <thead>
            <tr>
                <th>Privilegio ID</th>
                <th>Nivel de Privilegio</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($privilegiosinternet as $carrera): ?>
            <tr>
                <td><?= h($carrera->privilegio_id)?></td>
                <td><?= h($carrera->nivel) ?></td>
                <td><?= h($carrera->des_privilegio)?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>