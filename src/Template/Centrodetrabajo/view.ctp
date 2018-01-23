<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centrodetrabajo $centrodetrabajo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Centrodetrabajo'), ['action' => 'edit', $centrodetrabajo->departamento_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Centrodetrabajo'), ['action' => 'delete', $centrodetrabajo->departamento_id], ['confirm' => __('Are you sure you want to delete # {0}?', $centrodetrabajo->departamento_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Centrodetrabajo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centrodetrabajo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="centrodetrabajo view large-9 medium-8 columns content">
    <h3><?= h($centrodetrabajo->departamento_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Departamento Id') ?></th>
            <td><?= h($centrodetrabajo->departamento_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Des Departamento') ?></th>
            <td><?= h($centrodetrabajo->des_departamento) ?></td>
        </tr>
    </table>
</div>
