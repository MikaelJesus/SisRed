<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Impresora[]|\Cake\Collection\CollectionInterface $impresoras
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Nueva Impresora'), ['action' => 'add']) ?></li>
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
        <h1><?= __('Impresoras') ?></h1>


        <table class="table table-striped table-hover ">
         <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('impresora_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('numero_serie','Numero de Serie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modelo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mac_impresora','MAC') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip_impresora','IP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_inventario','Numero en Inventario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_alta','Fecha de Alta') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('velocidad_imprecion') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('nodo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empleados_empleado_id','Empleado') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('tipocolor_tipocolor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoimpresora_tipoimpresora_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tiporesguardo_tiporesguardo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoconexion_tipoconexion_id') ?></th> -->
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($impresoras as $impresora): ?>
            <tr>
                <!-- <td><?= $impresora->has('impresora') ? $this->Html->link($impresora->impresora->impresora_id, ['controller' => 'Impresoras', 'action' => 'view', $impresora->impresora->impresora_id]) : '' ?></td> -->
                <td><?= h($impresora->numero_serie) ?></td>
                <td><?= h($impresora->marca) ?></td>
                <td><?= h($impresora->modelo) ?></td>
                <td><?= h($impresora->mac_impresora) ?></td>
                <td><?= h($impresora->ip_impresora) ?></td>
                <td><?= h($impresora->numero_inventario) ?></td>
                <td><?= h($impresora->fecha_alta) ?></td>
                <!-- <td><?= h($impresora->velocidad_imprecion) ?></td> -->
                <td><?= h($impresora->nodo) ?></td>
                <td><?= $impresora->has('empleado') ? $this->Html->link($impresora->empleado->nue, ['controller' => 'Empleados', 'action' => 'view', $impresora->empleado->empleado_id]) : '' ?></td>
                <!-- <td><?= $impresora->has('tipocolor') ? $this->Html->link($impresora->tipocolor->tipocolor_id, ['controller' => 'Tipocolor', 'action' => 'view', $impresora->tipocolor->tipocolor_id]) : '' ?></td>
                <td><?= $impresora->has('tipoimpresora') ? $this->Html->link($impresora->tipoimpresora->tipoimpresora_id, ['controller' => 'Tipoimpresora', 'action' => 'view', $impresora->tipoimpresora->tipoimpresora_id]) : '' ?></td>
                <td><?= $impresora->has('tiporesguardo') ? $this->Html->link($impresora->tiporesguardo->tiporesguardo_id, ['controller' => 'Tiporesguardo', 'action' => 'view', $impresora->tiporesguardo->tiporesguardo_id]) : '' ?></td>
                <td><?= $impresora->has('tipoconexion') ? $this->Html->link($impresora->tipoconexion->tipoconexion_id, ['controller' => 'Tipoconexion', 'action' => 'view', $impresora->tipoconexion->tipoconexion_id]) : '' ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $impresora->impresora_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $impresora->impresora_id]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $impresora->impresora_id], ['confirm' => __('Esta seguro que desea eliminar este registro?', $impresora->impresora_id)]) ?>
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