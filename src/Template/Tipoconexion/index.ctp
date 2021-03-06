<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoconexion[]|\Cake\Collection\CollectionInterface $tipoconexion
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipoconexion'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="tipoconexion index large-10 medium-8 columns content">
    <h3><?= __('Tipoconexion') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('tipoconexion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_tipoconexion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoconexion as $tipoconexion): ?>
            <tr>
                <td><?= $this->Number->format($tipoconexion->tipoconexion_id) ?></td>
                <td><?= h($tipoconexion->des_tipoconexion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipoconexion->tipoconexion_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoconexion->tipoconexion_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoconexion->tipoconexion_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoconexion->tipoconexion_id)]) ?>
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
