<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Impresora[]|\Cake\Collection\CollectionInterface $impresoras
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Impresora'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="impresoras index large-10 medium-8 columns content">
    <h3><?= __('Impresoras') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('impresora_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('numero_serie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modelo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mac_impresora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ip_impresora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_inventario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_alta') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('velocidad_imprecion') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('nodo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empleados_empleado_id') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('tipocolor_tipocolor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoimpresora_tipoimpresora_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tiporesguardo_tiporesguardo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoconexion_tipoconexion_id') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $impresora->impresora_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $impresora->impresora_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $impresora->impresora_id], ['confirm' => __('Are you sure you want to delete # {0}?', $impresora->impresora_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
