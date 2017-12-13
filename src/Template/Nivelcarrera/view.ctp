<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nivelcarrera $nivelcarrera
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Nidel de Carrera'), ['action' => 'edit',$nivelcarrera->nivelcarrera_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Nivel de Carrera'),
                ['action' => 'delete', $nivelcarrera->nivelcarrera_id],
                ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nuevo Nivel de Carrera'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Niveles de Carrera'), ['action' => 'index']) ?></li>
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
        <h1><?= __('Nivele de Carrera') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2><?= h($nivelcarrera->nivelcarrera_id) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($nivelcarrera->des_nivelcarrera) ?>
        </div>
    </div>
</div>