<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statusrequerimiento[]|\Cake\Collection\CollectionInterface $statusrequerimiento
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Statusrequerimiento'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="statusrequerimiento index large-10 medium-8 columns content">
    <h3><?= __('Statusrequerimiento') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('statusrequerimiento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_statusrequerimiento') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($statusrequerimiento as $statusrequerimiento): ?>
            <tr>
                <td><?= $this->Number->format($statusrequerimiento->statusrequerimiento_id) ?></td>
                <td><?= h($statusrequerimiento->des_statusrequerimiento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $statusrequerimiento->statusrequerimiento_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statusrequerimiento->statusrequerimiento_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statusrequerimiento->statusrequerimiento_id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusrequerimiento->statusrequerimiento_id)]) ?>
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
