<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrera[]|\Cake\Collection\CollectionInterface $carreras
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Carrera'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Export'), ['action' => 'export']) ?></li>
        <li><?= $this->Html->link(__('Export to PDF'), ['action' => 'pdf','_ext' => 'pdf']); ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="carreras index large-10 medium-8 columns content">
    <h3><?= __('Carreras') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('carrera_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('des_carrera') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nivelcarrera_nivelcarrera_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carreras as $carrera): ?>
            <tr>
                <!-- <td><?= h($carrera->carrera_id)?></td> -->
                <td><?= h($carrera->des_carrera) ?></td>
                <td><?= $carrera->has('nivelcarrera') ? $this->Html->link($carrera->nivelcarrera->des_nivelcarrera, ['controller' => 'Nivelcarrera', 'action' => 'view', $carrera->nivelcarrera->nivelcarrera_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $carrera->carrera_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carrera->carrera_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carrera->carrera_id], ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->carrera_id)]) ?>
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
