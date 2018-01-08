<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requerimiento $requerimiento
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Requerimiento'), ['action' => 'edit',$requerimiento->requerimiento_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Requerimiento'),
                ['action' => 'delete', $requerimiento->requerimiento_id],
                ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nuevo Requerimiento'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Requerimientos'), ['action' => 'index']) ?></li>
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
        <h1><?= __('Requerimiento') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2><?= h($requerimiento->requerimiento_id) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($requerimiento->des_requerimiento) ?>
        </div>
    </div>
</div>