<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pc $pc
 */
?>

<!-- <div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Dependencia'), ['action' => 'edit',$dependencia->dependencia_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Dependencia'),
                ['action' => 'delete', $dependencia->dependencia_id],
                ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nueva Dependencia'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Dependencias'), ['action' => 'index']) ?></li>
        </ul>
    </div>
         <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <h1><?= __('Dependencia') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2><?= h($dependencia->dependencia_id) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($dependencia->des_dependencia) ?>
        </div>
    </div>
</div> -->



<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pc'), ['action' => 'edit', $pc->pc_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pc'), ['action' => 'delete', $pc->pc_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pc->pc_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pcs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pc'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="pcs view large-10 medium-8 columns content">
    <h3><?= h($pc->pc_id) ?></h3>
    <table class="vertical-table">
        <!-- <tr>
            <th scope="row"><?= __('Pc') ?></th>
            <td><?= $pc->has('pc') ? $this->Html->link($pc->pc->pc_id, ['controller' => 'Pcs', 'action' => 'view', $pc->pc->pc_id]) : '' ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Direccion Mac') ?></th>
            <td><?= h($pc->direccion_mac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marca') ?></th>
            <td><?= h($pc->marca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo Pc') ?></th>
            <td><?= h($pc->modelo_pc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sistema Operativo') ?></th>
            <td><?= h($pc->sistema_operativo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Red') ?></th>
            <td><?= h($pc->nombre_red) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grupo Trabajo') ?></th>
            <td><?= h($pc->grupo_trabajo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip') ?></th>
            <td><?= h($pc->ip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Antivirus') ?></th>
            <td><?= h($pc->antivirus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nodo') ?></th>
            <td><?= h($pc->nodo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edificio') ?></th>
            <td><?= h($pc->edificio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Piso') ?></th>
            <td><?= h($pc->piso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marca Procesador') ?></th>
            <td><?= h($pc->marca_procesador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo Procesador') ?></th>
            <td><?= h($pc->modelo_procesador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Velocidad Procesador') ?></th>
            <td><?= h($pc->velocidad_procesador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacidad Disco') ?></th>
            <td><?= h($pc->capacidad_disco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacidad Ram') ?></th>
            <td><?= h($pc->capacidad_ram) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tiporesguardo') ?></th>
            <td><?= $pc->has('tiporesguardo') ? $this->Html->link($pc->tiporesguardo->des_resguardo, ['controller' => 'Tiporesguardo', 'action' => 'view', $pc->tiporesguardo->tiporesguardo_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipoconexion') ?></th>
            <td><?= $pc->has('tipoconexion') ? $this->Html->link($pc->tipoconexion->des_tipoconexion, ['controller' => 'Tipoconexion', 'action' => 'view', $pc->tipoconexion->tipoconexion_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipoequipo') ?></th>
            <td><?= $pc->has('tipoequipo') ? $this->Html->link($pc->tipoequipo->des_tipoequipo, ['controller' => 'Tipoequipo', 'action' => 'view', $pc->tipoequipo->tipoequipo_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empleado') ?></th>
            <td><?= $pc->has('empleado') ? $this->Html->link($pc->empleado->nue, ['controller' => 'Empleados', 'action' => 'view', $pc->empleado->empleado_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Alta') ?></th>
            <td><?= h($pc->fecha_alta) ?></td>
        </tr>
    </table>
</div>
