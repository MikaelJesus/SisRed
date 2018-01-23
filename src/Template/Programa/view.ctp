<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programa $programa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Programa'), ['action' => 'edit', $programa->unidad_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Programa'), ['action' => 'delete', $programa->unidad_id], ['confirm' => __('Are you sure you want to delete # {0}?', $programa->unidad_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Programa'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="programa view large-9 medium-8 columns content">
    <h3><?= h($programa->unidad_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Unidad Id') ?></th>
            <td><?= h($programa->unidad_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Des Unidad') ?></th>
            <td><?= h($programa->des_unidad) ?></td>
        </tr>
    </table>
</div>
