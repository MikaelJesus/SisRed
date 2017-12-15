<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movgafete[]|\Cake\Collection\CollectionInterface $movgafetes
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Nueva Movimiento de Gafete'), ['action' => 'add']) ?></li>
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
        <h1><?= __('Movimientos de Gafetes') ?></h1>


        <table class="table table-striped table-hover ">
         <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('movgafete_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('tipo_movimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_movimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empleados_empleado_id') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movgafetes as $movgafete): ?>
            <tr>
               <!--  <td><?= $movgafete->has('movgafete') ? $this->Html->link($movgafete->movgafete->movgafete_id, ['controller' => 'Movgafetes', 'action' => 'view', $movgafete->movgafete->movgafete_id]) : '' ?></td> -->
                <td><?= $this->Number->format($movgafete->tipo_movimiento) ?></td>
                <td><?= h($movgafete->fecha_movimiento) ?></td>
                <td><?= $movgafete->has('user') ? $this->Html->link($movgafete->user->user_id, ['controller' => 'Users', 'action' => 'view', $movgafete->user->user_id]) : '' ?></td>
                <td><?= $movgafete->has('empleado') ? $this->Html->link($movgafete->empleado->nue, ['controller' => 'Empleados', 'action' => 'view', $movgafete->empleado->empleado_id]) : '' ?></td>
                  <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $movgafete->movgafete_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $movgafete->movgafete_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $movgafete->movgafete_id], ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]) ?>
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