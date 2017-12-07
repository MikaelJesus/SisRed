<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoimpresora[]|\Cake\Collection\CollectionInterface $tipoimpresora
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipoimpresora'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="tipoimpresora index large-10 medium-8 columns content">
    <h3><?= __('Tipoimpresora') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('tipoimpresora_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_tipoimpresora') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoimpresora as $tipoimpresora): ?>
            <tr>
                <td><?= $this->Number->format($tipoimpresora->tipoimpresora_id) ?></td>
                <td><?= h($tipoimpresora->des_tipoimpresora) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipoimpresora->tipoimpresora_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoimpresora->tipoimpresora_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoimpresora->tipoimpresora_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoimpresora->tipoimpresora_id)]) ?>
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
