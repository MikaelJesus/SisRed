<div>
    <h3><?= __('Conmutadores') ?></h3>
    <table>
        <thead>
            <tr>
                <th>Contratacion ID</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contrataciones as $carrera): ?>
            <tr>
                <td><?= h($carrera->contratacion_id)?></td>
                <td><?= h($carrera->des_contratacion) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>