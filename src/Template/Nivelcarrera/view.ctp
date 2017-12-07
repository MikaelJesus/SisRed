<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nivelcarrera $nivelcarrera
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Nivelcarrera'), ['action' => 'edit', $nivelcarrera->nivelcarrera_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nivelcarrera'), ['action' => 'delete', $nivelcarrera->nivelcarrera_id], ['confirm' => __('Are you sure you want to delete # {0}?', $nivelcarrera->nivelcarrera_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Nivelcarrera'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nivelcarrera'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="nivelcarrera view large-10 medium-8 columns content">
    <h3><?= h($nivelcarrera->nivelcarrera_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Nivelcarrera') ?></th>
            <td><?= h($nivelcarrera->des_nivelcarrera) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivelcarrera Id') ?></th>
            <td><?= $this->Number->format($nivelcarrera->nivelcarrera_id) ?></td>
        </tr>
    </table>
</div>
