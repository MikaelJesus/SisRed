<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pc[]|\Cake\Collection\CollectionInterface $pcs
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Nueva Pc'), ['action' => 'add']) ?></li>
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
        <h1><?= __('Lista de Pcs') ?></h1>


        <table class="table table-striped table-hover ">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('pc_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('direccion_mac') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('marca') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('modelo_pc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_operativo') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('nombre_red') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('grupo_trabajo') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('ip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('antivirus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nodo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edificio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('piso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_alta') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('marca_procesador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modelo_procesador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('velocidad_procesador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capacidad_disco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capacidad_ram') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('tiporesguardo_tiporesguardo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoconexion_tipoconexion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoequipo_tipoequipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empleados_empleado_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pcs as $pc): ?>
            <tr>
                <!-- <td><?= $pc->has('pc') ? $this->Html->link($pc->pc->pc_id, ['controller' => 'Pcs', 'action' => 'view', $pc->pc->pc_id]) : '' ?></td> -->
                <td><?= h($pc->direccion_mac) ?></td>
                <!-- <td><?= h($pc->marca) ?></td> -->
                <td><?= h($pc->modelo_pc) ?></td>
                <td><?= h($pc->sistema_operativo) ?></td>
                <!-- <td><?= h($pc->nombre_red) ?></td> -->
                <!-- <td><?= h($pc->grupo_trabajo) ?></td> -->
                <td><?= h($pc->ip) ?></td>
                <td><?= h($pc->antivirus) ?></td>
                <td><?= h($pc->nodo) ?></td>
                <td><?= h($pc->edificio) ?></td>
                <td><?= h($pc->piso) ?></td>
                <td><?= h($pc->fecha_alta) ?></td>
                <!-- <td><?= h($pc->marca_procesador) ?></td>
                <td><?= h($pc->modelo_procesador) ?></td>
                <td><?= h($pc->velocidad_procesador) ?></td>
                <td><?= h($pc->capacidad_disco) ?></td>
                <td><?= h($pc->capacidad_ram) ?></td> -->
                <td><?= $pc->has('tiporesguardo') ? $this->Html->link($pc->tiporesguardo->tiporesguardo_id, ['controller' => 'Tiporesguardo', 'action' => 'view', $pc->tiporesguardo->tiporesguardo_id]) : '' ?></td>
                <td><?= $pc->has('tipoconexion') ? $this->Html->link($pc->tipoconexion->tipoconexion_id, ['controller' => 'Tipoconexion', 'action' => 'view', $pc->tipoconexion->tipoconexion_id]) : '' ?></td>
                <td><?= $pc->has('tipoequipo') ? $this->Html->link($pc->tipoequipo->tipoequipo_id, ['controller' => 'Tipoequipo', 'action' => 'view', $pc->tipoequipo->tipoequipo_id]) : '' ?></td>
                <td><?= $pc->has('empleado') ? $this->Html->link($pc->empleado->empleado_id, ['controller' => 'Empleados', 'action' => 'view', $pc->empleado->empleado_id]) : '' ?></td>
                  <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $pc->pc_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $pc->pc_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $pc->pc_id], ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]) ?>
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