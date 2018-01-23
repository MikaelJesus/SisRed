<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programa[]|\Cake\Collection\CollectionInterface $programa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="programa index large-9 medium-8 columns content">
    <h3><?= __('Programa') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('unidad_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_unidad') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($programa as $programa): ?>
            <tr>
                <td><?= h($programa->unidad_id) ?></td>
                <td><?= h($programa->des_unidad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $programa->unidad_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $programa->unidad_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $programa->unidad_id], ['confirm' => __('Are you sure you want to delete # {0}?', $programa->unidad_id)]) ?>
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
