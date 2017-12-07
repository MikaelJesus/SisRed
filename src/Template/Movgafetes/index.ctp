<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movgafete[]|\Cake\Collection\CollectionInterface $movgafetes
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Movgafete'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="movgafetes index large-10 medium-8 columns content">
    <h3><?= __('Movgafetes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('movgafete_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('tipo_movimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_movimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empleados_empleado_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $movgafete->movgafete_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movgafete->movgafete_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movgafete->movgafete_id], ['confirm' => __('Are you sure you want to delete # {0}?', $movgafete->movgafete_id)]) ?>
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
