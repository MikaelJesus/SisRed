<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movvozydato $movvozydato
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movvozydato'), ['action' => 'edit', $movvozydato->movvozydatos_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movvozydato'), ['action' => 'delete', $movvozydato->movvozydatos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $movvozydato->movvozydatos_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movvozydatos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movvozydato'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="movvozydatos view large-10 medium-8 columns content">
    <h3><?= h($movvozydato->movvozydatos_id) ?></h3>
    <table class="vertical-table">
        <!-- <tr>
            <th scope="row"><?= __('Movvozydato') ?></th>
            <td><?= $movvozydato->has('movvozydato') ? $this->Html->link($movvozydato->movvozydato->movvozydatos_id, ['controller' => 'Movvozydatos', 'action' => 'view', $movvozydato->movvozydato->movvozydatos_id]) : '' ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Tipo Movimiento') ?></th>
            <td><?= h($movvozydato->tipo_movimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $movvozydato->has('user') ? $this->Html->link($movvozydato->user->user_id, ['controller' => 'Users', 'action' => 'view', $movvozydato->user->user_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empleado') ?></th>
            <td><?= $movvozydato->has('empleado') ? $this->Html->link($movvozydato->empleado->empleado_id, ['controller' => 'Empleados', 'action' => 'view', $movvozydato->empleado->empleado_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Movimiento') ?></th>
            <td><?= h($movvozydato->fecha_movimiento) ?></td>
        </tr>
    </table>
</div>
