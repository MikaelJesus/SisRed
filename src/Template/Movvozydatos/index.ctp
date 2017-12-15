<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movvozydato[]|\Cake\Collection\CollectionInterface $movvozydatos
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Nuevo Movimiento de Voz y Datos'), ['action' => 'add']) ?></li>
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
        <h1><?= __('Movimientos de Voz y Datos') ?></h1>


        <table class="table table-striped table-hover ">
         <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('movvozydatos_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('tipo_movimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_movimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empleados_empleado_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movvozydatos as $movvozydato): ?>
            <tr>
                <!-- <td><?= $movvozydato->has('movvozydato') ? $this->Html->link($movvozydato->movvozydato->movvozydatos_id, ['controller' => 'Movvozydatos', 'action' => 'view', $movvozydato->movvozydato->movvozydatos_id]) : '' ?></td> -->
                <td><?= h($movvozydato->tipo_movimiento) ?></td>
                <td><?= h($movvozydato->fecha_movimiento) ?></td>
                <td><?= $movvozydato->has('user') ? $this->Html->link($movvozydato->user->user_id, ['controller' => 'Users', 'action' => 'view', $movvozydato->user->user_id]) : '' ?></td>
                <td><?= $movvozydato->has('empleado') ? $this->Html->link($movvozydato->empleado->empleado_id, ['controller' => 'Empleados', 'action' => 'view', $movvozydato->empleado->empleado_id]) : '' ?></td>
                  <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $movvozydato->movvozydatos_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $movvozydato->movvozydatos_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $movvozydato->movvozydatos_id], ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
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