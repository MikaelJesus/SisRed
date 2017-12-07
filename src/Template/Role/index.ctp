<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role[]|\Cake\Collection\CollectionInterface $role
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Role'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="role index large-10 medium-8 columns content">
    <h3><?= __('Role') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_role') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($role as $role): ?>
            <tr>
                <td><?= $this->Number->format($role->role_id) ?></td>
                <td><?= h($role->des_role) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $role->role_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $role->role_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $role->role_id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->role_id)]) ?>
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
