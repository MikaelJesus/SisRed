<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipocolor $tipocolor
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipocolor'), ['action' => 'edit', $tipocolor->tipocolor_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipocolor'), ['action' => 'delete', $tipocolor->tipocolor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipocolor->tipocolor_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipocolor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipocolor'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="tipocolor view large-10 medium-8 columns content">
    <h3><?= h($tipocolor->tipocolor_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Tipocolor') ?></th>
            <td><?= h($tipocolor->des_tipocolor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipocolor Id') ?></th>
            <td><?= $this->Number->format($tipocolor->tipocolor_id) ?></td>
        </tr>
    </table>
</div>
