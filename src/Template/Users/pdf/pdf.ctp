<div>
    <h3><?= __('Usuarios') ?></h3>
    <table>
        <thead>
            <tr>
                <th>Usuario ID</th>
                <th>Nombre de Usuario</th>
                <th>Rol</th>
                <th>Empleado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $carrera): ?>
            <tr>
                <td><?= h($carrera->user_id)?></td>
                <td><?= h($carrera->username) ?></td>
                <td><?= h($carrera->role_role_id)?></td>
                <td><?= h($carrera->empleados_empleado_id) ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>