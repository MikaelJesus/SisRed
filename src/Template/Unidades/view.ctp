<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unidade $unidade
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Unidade'), ['action' => 'edit', $unidade->unidad_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Unidade'), ['action' => 'delete', $unidade->unidad_id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidade->unidad_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Unidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="unidades view large-10 medium-8 columns content">
    <h3><?= h($unidade->unidad_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Unidad Id') ?></th>
            <td><?= h($unidade->unidad_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Des Unidad') ?></th>
            <td><?= h($unidade->des_unidad) ?></td>
        </tr>
    </table>
</div>
