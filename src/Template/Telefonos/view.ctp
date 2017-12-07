<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefono $telefono
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Telefono'), ['action' => 'edit', $telefono->telefono_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Telefono'), ['action' => 'delete', $telefono->telefono_id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefono->telefono_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Telefonos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Telefono'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="telefonos view large-10 medium-8 columns content">
    <h3><?= h($telefono->telefono_id) ?></h3>
    <table class="vertical-table">
        <!-- <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= $telefono->has('telefono') ? $this->Html->link($telefono->telefono->telefono_id, ['controller' => 'Telefonos', 'action' => 'view', $telefono->telefono->telefono_id]) : '' ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Mac Telefono') ?></th>
            <td><?= h($telefono->mac_telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extencion Telefono') ?></th>
            <td><?= h($telefono->extencion_telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo Telefono') ?></th>
            <td><?= h($telefono->modelo_telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Serie') ?></th>
            <td><?= h($telefono->numero_serie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Inventario') ?></th>
            <td><?= h($telefono->numero_inventario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empleado') ?></th>
            <td><?= $telefono->has('empleado') ? $this->Html->link($telefono->empleado->nue, ['controller' => 'Empleados', 'action' => 'view', $telefono->empleado->empleado_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Alta') ?></th>
            <td><?= h($telefono->fecha_alta) ?></td>
        </tr>
    </table>
</div>
