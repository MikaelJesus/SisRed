<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependencia $dependencia
 */
?>

<div id="wrapper">
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
        <!-- <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div> -->
        <h1><?= __('Dependencia') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2><?= h($dependencia->dependencia_id) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($dependencia->des_dependencia) ?>
        </div>
    </div>
</div>