<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoequipo $tipoequipo
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipoequipo'), ['action' => 'edit', $tipoequipo->tipoequipo_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipoequipo'), ['action' => 'delete', $tipoequipo->tipoequipo_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoequipo->tipoequipo_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipoequipo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipoequipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="tipoequipo view large-10 medium-8 columns content">
    <h3><?= h($tipoequipo->tipoequipo_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Tipoequipo') ?></th>
            <td><?= h($tipoequipo->des_tipoequipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipoequipo Id') ?></th>
            <td><?= $this->Number->format($tipoequipo->tipoequipo_id) ?></td>
        </tr>
    </table>
</div>
