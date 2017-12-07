<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Impresora $impresora
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Impresora'), ['action' => 'edit', $impresora->impresora_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Impresora'), ['action' => 'delete', $impresora->impresora_id], ['confirm' => __('Are you sure you want to delete # {0}?', $impresora->impresora_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Impresoras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Impresora'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="impresoras view large-10 medium-8 columns content">
    <h3><?= h($impresora->impresora_id) ?></h3>
    <table class="vertical-table">
        <!-- <tr>
            <th scope="row"><?= __('Impresora') ?></th>
            <td><?= $impresora->has('impresora') ? $this->Html->link($impresora->impresora->impresora_id, ['controller' => 'Impresoras', 'action' => 'view', $impresora->impresora->impresora_id]) : '' ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Numero Serie') ?></th>
            <td><?= h($impresora->numero_serie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marca') ?></th>
            <td><?= h($impresora->marca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo') ?></th>
            <td><?= h($impresora->modelo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mac Impresora') ?></th>
            <td><?= h($impresora->mac_impresora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip Impresora') ?></th>
            <td><?= h($impresora->ip_impresora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Inventario') ?></th>
            <td><?= h($impresora->numero_inventario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Velocidad Imprecion') ?></th>
            <td><?= h($impresora->velocidad_imprecion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nodo') ?></th>
            <td><?= h($impresora->nodo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empleado') ?></th>
            <td><?= $impresora->has('empleado') ? $this->Html->link($impresora->empleado->nue, ['controller' => 'Empleados', 'action' => 'view', $impresora->empleado->empleado_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipocolor') ?></th>
            <td><?= $impresora->has('tipocolor') ? $this->Html->link($impresora->tipocolor->tipocolor_id, ['controller' => 'Tipocolor', 'action' => 'view', $impresora->tipocolor->tipocolor_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipoimpresora') ?></th>
            <td><?= $impresora->has('tipoimpresora') ? $this->Html->link($impresora->tipoimpresora->tipoimpresora_id, ['controller' => 'Tipoimpresora', 'action' => 'view', $impresora->tipoimpresora->tipoimpresora_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tiporesguardo') ?></th>
            <td><?= $impresora->has('tiporesguardo') ? $this->Html->link($impresora->tiporesguardo->tiporesguardo_id, ['controller' => 'Tiporesguardo', 'action' => 'view', $impresora->tiporesguardo->tiporesguardo_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipoconexion') ?></th>
            <td><?= $impresora->has('tipoconexion') ? $this->Html->link($impresora->tipoconexion->tipoconexion_id, ['controller' => 'Tipoconexion', 'action' => 'view', $impresora->tipoconexion->tipoconexion_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Alta') ?></th>
            <td><?= h($impresora->fecha_alta) ?></td>
        </tr>
    </table>
</div>
