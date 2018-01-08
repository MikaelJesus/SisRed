<div>
    <h3><?= __('Conmutadores') ?></h3>
    <table>
        <thead>
            <tr>
                <th>Dependencia ID</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dependencias as $carrera): ?>
            <tr>
                <td><?= h($carrera->dependencia_id)?></td>
                <td><?= h($carrera->des_dependencia) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>