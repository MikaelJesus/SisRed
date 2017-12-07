<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movvozydato[]|\Cake\Collection\CollectionInterface $movvozydatos
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Movvozydato'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="movvozydatos index large-10 medium-8 columns content">
    <h3><?= __('Movvozydatos') ?></h3>
    <table cellpadding="0" cellspacing="0">
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $movvozydato->movvozydatos_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movvozydato->movvozydatos_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movvozydato->movvozydatos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $movvozydato->movvozydatos_id)]) ?>
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
