<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recibido $recibido
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Recibido'), ['action' => 'edit',$recibido->recibido_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Recibido'),
                ['action' => 'delete', $recibido->recibido_id],
                ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nuevo Recibido'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Recibidos'), ['action' => 'index']) ?></li>
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
        <h1><?= __('Recibido') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2><?= h($recibido->recibido_id) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($recibido->des_recibido) ?>
        </div>
    </div>
</div>