<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unidadejecutora $unidadejecutora
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Unidadejecutora'), ['action' => 'edit', $unidadejecutora->area_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Unidadejecutora'), ['action' => 'delete', $unidadejecutora->area_id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidadejecutora->area_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Unidadejecutora'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unidadejecutora'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="unidadejecutora view large-9 medium-8 columns content">
    <h3><?= h($unidadejecutora->area_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Area Id') ?></th>
            <td><?= h($unidadejecutora->area_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Des Area') ?></th>
            <td><?= h($unidadejecutora->des_area) ?></td>
        </tr>
    </table>
</div>
