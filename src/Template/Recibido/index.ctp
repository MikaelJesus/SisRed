<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recibido[]|\Cake\Collection\CollectionInterface $recibido
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Recibido'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="recibido index large-10 medium-8 columns content">
    <h3><?= __('Recibido') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('recibido_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_recibido') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recibido as $recibido): ?>
            <tr>
                <td><?= $this->Number->format($recibido->recibido_id) ?></td>
                <td><?= h($recibido->des_recibido) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $recibido->recibido_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recibido->recibido_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recibido->recibido_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recibido->recibido_id)]) ?>
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
