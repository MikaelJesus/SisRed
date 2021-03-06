<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statusprofecional[]|\Cake\Collection\CollectionInterface $statusprofecional
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Statusprofecional'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="statusprofecional index large-10 medium-8 columns content">
    <h3><?= __('Statusprofecional') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('statusprofecional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_statusprofecional') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($statusprofecional as $statusprofecional): ?>
            <tr>
                <td><?= $this->Number->format($statusprofecional->statusprofecional_id) ?></td>
                <td><?= h($statusprofecional->des_statusprofecional) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $statusprofecional->statusprofecional_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statusprofecional->statusprofecional_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statusprofecional->statusprofecional_id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusprofecional->statusprofecional_id)]) ?>
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
