<div>
    <h3><?= __('Carreras') ?></h3>
    <table>
        <thead>
            <tr>
                <th>Carrera ID</th>
                <th>Descripcioin</th>
                <th>Nivel Carrera</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carreras as $carrera): ?>
            <tr>
                <td><?= h($carrera->carrera_id)?></td>
                <td><?= h($carrera->des_carrera) ?></td>
                <td><?= h($carrera->nivelcarrera_nivelcarrera_id)?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>