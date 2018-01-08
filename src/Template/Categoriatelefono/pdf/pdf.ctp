<div>
    <h3><?= __('Categoria Telefono') ?></h3>
    <table>
        <thead>
            <tr>
                <th>Carrera ID</th>
                <th>Descripcioin</th>
                <th>Nivel Asignacion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoriatelefono as $carrera): ?>
            <tr>
                <td><?= h($carrera->categoriatelefono_id)?></td>
                <td><?= h($carrera->des_categoriatelefono) ?></td>
                <td><?= h($carrera->des_nivelasignacion)?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>