<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conmutadore $conmutadore
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Conmutadore'), ['action' => 'edit', $conmutadore->switch_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Conmutadore'), ['action' => 'delete', $conmutadore->switch_id], ['confirm' => __('Are you sure you want to delete # {0}?', $conmutadore->switch_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Conmutadores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conmutadore'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="conmutadores view large-10 medium-8 columns content">
    <h3><?= h($conmutadore->switch_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Numero Serie') ?></th>
            <td><?= h($conmutadore->numero_serie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marca') ?></th>
            <td><?= h($conmutadore->marca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Puertos') ?></th>
            <td><?= h($conmutadore->numero_puertos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Inventario') ?></th>
            <td><?= h($conmutadore->numero_inventario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Equipos') ?></th>
            <td><?= h($conmutadore->numero_equipos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo') ?></th>
            <td><?= h($conmutadore->modelo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tiporesguardo') ?></th>
            <td><?= $conmutadore->has('tiporesguardo') ? $this->Html->link($conmutadore->tiporesguardo->des_resguardo, ['controller' => 'Tiporesguardo', 'action' => 'view', $conmutadore->tiporesguardo->tiporesguardo_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empleado') ?></th>
            <td><?= $conmutadore->has('empleado') ? $this->Html->link($conmutadore->empleado->nombre." ".$conmutadore->empleado->apellidop." ".$conmutadore->empleado->apellidom, ['controller' => 'Empleados', 'action' => 'view', $conmutadore->empleado->empleado_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Switch Id') ?></th>
            <td><?= $this->Number->format($conmutadore->switch_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Alta') ?></th>
            <td><?= h($conmutadore->fecha_alta) ?></td>
        </tr>
    </table>
</div>
