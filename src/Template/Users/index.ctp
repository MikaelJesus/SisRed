<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">Menu</li>
                <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?></li>
                <li><?= $this->element('menu')?></li>
            </ul>
        </div>
        <!-- <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div> -->


    <h1><?= __('Usuarios') ?></h1>
    



<table class="table table-striped table-hover ">
          <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('user_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('Nombre de Usuario') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('password') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('Privilegios') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Empleado') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
  <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->username) ?></td>
                <!-- <td><?= h($user->password) ?></td> -->
                <td><?= $user->has('role') ? $this->Html->link($user->role->des_role, ['controller' => 'Role', 'action' => 'view', $user->role->role_id]) : '' ?></td>
                <td><?= $user->has('empleado') ? $this->Html->link($user->empleado->nombre." ".$user->empleado->apellidop." ".$user->empleado->apellidom, ['controller' => 'Empleados', 'action' => 'view', $user->empleado->empleado_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->user_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->user_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
</table>



    <div class="text-center">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, Mostrando {{current}} columna(s) de {{count}} en total')]) ?></p>
    </div>

</div>