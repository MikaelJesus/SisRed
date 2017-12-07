<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movgafete $movgafete
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movgafete'), ['action' => 'edit', $movgafete->movgafete_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movgafete'), ['action' => 'delete', $movgafete->movgafete_id], ['confirm' => __('Are you sure you want to delete # {0}?', $movgafete->movgafete_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movgafetes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movgafete'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="movgafetes view large-10 medium-8 columns content">
    <h3><?= h($movgafete->movgafete_id) ?></h3>
    <table class="vertical-table">
        <!-- <tr>
            <th scope="row"><?= __('Movgafete') ?></th>
            <td><?= $movgafete->has('movgafete') ? $this->Html->link($movgafete->movgafete->movgafete_id, ['controller' => 'Movgafetes', 'action' => 'view', $movgafete->movgafete->movgafete_id]) : '' ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $movgafete->has('user') ? $this->Html->link($movgafete->user->user_id, ['controller' => 'Users', 'action' => 'view', $movgafete->user->user_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empleado') ?></th>
            <td><?= $movgafete->has('empleado') ? $this->Html->link($movgafete->empleado->nue, ['controller' => 'Empleados', 'action' => 'view', $movgafete->empleado->empleado_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Movimiento') ?></th>
            <td><?= $this->Number->format($movgafete->tipo_movimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Movimiento') ?></th>
            <td><?= h($movgafete->fecha_movimiento) ?></td>
        </tr>
    </table>
</div>
