<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrera $carrera
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Carrera'), ['action' => 'edit', $carrera->carrera_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Carrera'), ['action' => 'delete', $carrera->carrera_id], ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->carrera_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Carreras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carrera'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Carreras'), ['controller' => 'Carreras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carrera'), ['controller' => 'Carreras', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nivelcarrera'), ['controller' => 'Nivelcarrera', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nivelcarrera'), ['controller' => 'Nivelcarrera', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="carreras view large-10 medium-8 columns content">
    <h3><?= h($carrera->carrera_id) ?></h3>
    <table class="vertical-table">
        <!-- <tr>
            <th scope="row"><?= __('Carrera') ?></th>
            <td><?= $carrera->has('carrera') ? $this->Html->link($carrera->carrera->carrera_id, ['controller' => 'Carreras', 'action' => 'view', $carrera->carrera->carrera_id]) : '' ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Des Carrera') ?></th>
            <td><?= h($carrera->des_carrera) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nivelcarrera') ?></th>
            <td><?= $carrera->has('nivelcarrera') ? $this->Html->link($carrera->nivelcarrera->des_nivelcarrera, ['controller' => 'Nivelcarrera', 'action' => 'view', $carrera->nivelcarrera->nivelcarrera_id]) : '' ?></td>
        </tr>
    </table>
</div>
