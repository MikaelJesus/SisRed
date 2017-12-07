<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departamento'), ['action' => 'edit', $departamento->departamento_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departamento'), ['action' => 'delete', $departamento->departamento_id], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->departamento_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="departamentos view large-10 medium-8 columns content">
    <h3><?= h($departamento->departamento_id) ?></h3>
    <table class="vertical-table">
        <!-- <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $departamento->has('departamento') ? $this->Html->link($departamento->departamento->departamento_id, ['controller' => 'Departamentos', 'action' => 'view', $departamento->departamento->departamento_id]) : '' ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Des Departamento') ?></th>
            <td><?= h($departamento->des_departamento) ?></td>
        </tr>
    </table>
</div>
