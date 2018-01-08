<div>
    <h3><?= __('Categorias') ?></h3>
    <table>
        <thead>
            <tr>
                <th>Categoria ID</th>
                <th>Descripcioin</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td><?= h($categoria->categoria_id)?></td>
                <td><?= h($categoria->des_categoria) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>