<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoconexion $tipoconexion
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipoconexion'), ['action' => 'edit', $tipoconexion->tipoconexion_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipoconexion'), ['action' => 'delete', $tipoconexion->tipoconexion_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoconexion->tipoconexion_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipoconexion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipoconexion'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="tipoconexion view large-10 medium-8 columns content">
    <h3><?= h($tipoconexion->tipoconexion_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Tipoconexion') ?></th>
            <td><?= h($tipoconexion->des_tipoconexion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipoconexion Id') ?></th>
            <td><?= $this->Number->format($tipoconexion->tipoconexion_id) ?></td>
        </tr>
    </table>
</div>
