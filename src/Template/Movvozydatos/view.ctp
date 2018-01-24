<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movvozydato $movvozydato
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar movvozydato'), ['action' => 'edit',$movvozydato->movvozydatos_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar movvozydato'),
                ['action' => 'delete', $movvozydato->movvozydatos_id],
                ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nueva movvozydato'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de movvozydatos'), ['action' => 'index']) ?></li>
            <li><a href="/SisRed/main/logout">Salir</a></li>
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
        <h1><?= __('movvozydato') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2><?= h($movvozydato->movvozydatos_id) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($movvozydato->tipo_movimiento) ?>
        </div>
        <div class="panel-body">
            <?= h($movvozydato->fecha_movimiento) ?>
        </div>
        <div class="panel-body">
            <?= $movvozydato->has('user') ? $this->Html->link($movvozydato->user->user_id, ['controller' => 'Users', 'action' => 'view', $movvozydato->user->user_id]) : '' ?>
        </div>
        <div class="panel-body">
            <?= $movvozydato->has('empleado') ? $this->Html->link($movvozydato->empleado->empleado_id, ['controller' => 'Empleados', 'action' => 'view', $movvozydato->empleado->empleado_id]) : '' ?>
        </div>
    </div>
</div>