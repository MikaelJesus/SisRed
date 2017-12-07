<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoriatelefono[]|\Cake\Collection\CollectionInterface $categoriatelefono
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Categoriatelefono'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="categoriatelefono index large-10 medium-8 columns content">
    <h3><?= __('Categoriatelefono') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('categoriatelefono_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_categoriatelefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_nivelasignacion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoriatelefono as $categoriatelefono): ?>
            <tr>
                <td><?= $this->Number->format($categoriatelefono->categoriatelefono_id) ?></td>
                <td><?= h($categoriatelefono->des_categoriatelefono) ?></td>
                <td><?= h($categoriatelefono->des_nivelasignacion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoriatelefono->categoriatelefono_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriatelefono->categoriatelefono_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriatelefono->categoriatelefono_id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriatelefono->categoriatelefono_id)]) ?>
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
