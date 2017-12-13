<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrera $carrera
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Carrera'), ['action' => 'edit',$carrera->carrera_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Carrera'),
                ['action' => 'delete', $carrera->carrera_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->carrera_id)]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nueva Carrera'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Carreras'), ['action' => 'index']) ?></li>
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
        <h1><?= __('Carrera') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2><?= h($carrera->carrera_id) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($carrera->des_carrera) ?>
        </div>
        <div class="panel-body">
            <?= $carrera->has('nivelcarrera') ? $this->Html->link($carrera->nivelcarrera->des_nivelcarrera, ['controller' => 'Nivelcarrera', 'action' => 'view', $carrera->nivelcarrera->nivelcarrera_id]) : '' ?>
        </div>
    </div>
</div>