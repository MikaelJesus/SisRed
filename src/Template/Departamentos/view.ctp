<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Departamento'), ['action' => 'edit',$departamento->departamento_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Departamento'),
                ['action' => 'delete', $departamento->departamento_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->departamento_id)]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nuevo Departamento'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Departamentos'), ['action' => 'index']) ?></li>
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
        <h1><?= __('Departamento') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2><?= h($departamento->departamento_id) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($departamento->des_departamento) ?>
        </div>
    </div>
</div>