<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Impresora $impresora
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Impresora'), ['action' => 'edit',$impresora->impresora_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Impresora'),
                ['action' => 'delete', $impresora->impresora_id],
                ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nueva Impresora'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Impresoras'), ['action' => 'index']) ?></li>
        </ul>
    </div>
        <!-- <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div> -->
        <h1><?= __('Impresora') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2><?= h($impresora->numero_serie) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($impresora->marca) ?>
        </div>
        <div class="panel-body">
            <?= h($impresora->modelo) ?>
        </div>
        <div class="panel-body">
            <?= h($impresora->mac_impresora) ?>
        </div>
        <div class="panel-body">
            <?= h($impresora->ip_impresora) ?>
        </div>
        <div class="panel-body">
            <?= h($impresora->numero_inventario) ?>
        </div>
        <div class="panel-body">
            <?= h($impresora->fecha_alta) ?>
        </div>
        <div class="panel-body">
            <?= h($impresora->velocidad_imprecion) ?>
        </div>
        <div class="panel-body">
            <?= h($impresora->nodo) ?>
        </div>
        <div class="panel-body">
            <?= h($impresora->tipocolor->des_tipocolor) ?>
        </div>
        <div class="panel-body">
            <?= h($impresora->tipoimpresora->des_tipoimpresora) ?>
        </div>
        <div class="panel-body">
            <?= h($impresora->tiporesguardo->des_resguardo) ?>
        </div>
        <div class="panel-body">
            <?= h($impresora->tipoconexion->des_tipoconexion) ?>
        </div>
        <div class="panel-body">
            <?= h($impresora->empleado->nombre." ".$impresora->empleado->apellidop." ".$impresora->empleado->apellidom) ?>
        </div>
    </div>
</div>


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
