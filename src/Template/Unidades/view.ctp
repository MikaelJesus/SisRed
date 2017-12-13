<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unidade $unidade
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Unidad'), ['action' => 'edit',$unidade->unidad_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Unidad'),
                ['action' => 'delete', $unidade->unidad_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $unidade->unidad_id)]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nueva Unidad'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Unidades'), ['action' => 'index']) ?></li>
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
        <h1><?= __('Unidad') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2><?= h($unidade->unidad_id) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($unidade->des_unidad) ?>
        </div>
    </div>
</div>