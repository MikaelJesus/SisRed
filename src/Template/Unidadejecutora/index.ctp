<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unidadejecutora[]|\Cake\Collection\CollectionInterface $unidadejecutora
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Unidadejecutora'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="unidadejecutora index large-9 medium-8 columns content">
    <h3><?= __('Unidadejecutora') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('area_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_area') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($unidadejecutora as $unidadejecutora): ?>
            <tr>
                <td><?= h($unidadejecutora->area_id) ?></td>
                <td><?= h($unidadejecutora->des_area) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $unidadejecutora->area_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $unidadejecutora->area_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $unidadejecutora->area_id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidadejecutora->area_id)]) ?>
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
