<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoimpresora $tipoimpresora
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipoimpresora'), ['action' => 'edit', $tipoimpresora->tipoimpresora_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipoimpresora'), ['action' => 'delete', $tipoimpresora->tipoimpresora_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoimpresora->tipoimpresora_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipoimpresora'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipoimpresora'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="tipoimpresora view large-10 medium-8 columns content">
    <h3><?= h($tipoimpresora->tipoimpresora_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Tipoimpresora') ?></th>
            <td><?= h($tipoimpresora->des_tipoimpresora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipoimpresora Id') ?></th>
            <td><?= $this->Number->format($tipoimpresora->tipoimpresora_id) ?></td>
        </tr>
    </table>
</div>
