<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefono[]|\Cake\Collection\CollectionInterface $telefonos
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Telefono'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="telefonos index large-10 medium-8 columns content">
    <h3><?= __('Telefonos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('telefono_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('mac_telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('extencion_telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modelo_telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_serie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_inventario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_alta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empleados_empleado_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($telefonos as $telefono): ?>
            <tr>
                <!-- <td><?= $telefono->has('telefono') ? $this->Html->link($telefono->telefono->telefono_id, ['controller' => 'Telefonos', 'action' => 'view', $telefono->telefono->telefono_id]) : '' ?></td> -->
                <td><?= h($telefono->mac_telefono) ?></td>
                <td><?= h($telefono->extencion_telefono) ?></td>
                <td><?= h($telefono->modelo_telefono) ?></td>
                <td><?= h($telefono->numero_serie) ?></td>
                <td><?= h($telefono->numero_inventario) ?></td>
                <td><?= h($telefono->fecha_alta) ?></td>
                <td><?= $telefono->has('empleado') ? $this->Html->link($telefono->empleado->nue, ['controller' => 'Empleados', 'action' => 'view', $telefono->empleado->empleado_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $telefono->telefono_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $telefono->telefono_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $telefono->telefono_id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefono->telefono_id)]) ?>
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
