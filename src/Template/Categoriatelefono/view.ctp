<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoriatelefono $categoriatelefono
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Categoria de Telefono'), ['action' => 'edit',$categoriatelefono->categoriatelefono_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Categoria de Telefono'),
                ['action' => 'delete', $categoriatelefono->categoriatelefono_id],
                ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nueva Categoria de Telefono'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Categorias de Telefono'), ['action' => 'index']) ?></li>
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
        <h1><?= __('Categoria de Telefono') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2><?= h($categoriatelefono->categoriatelefono_id) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($categoriatelefono->des_categoriatelefono) ?>
        </div>
        <div class="panel-body">
            <?= h($categoriatelefono->des_nivelasignacion) ?>
        </div>
    </div>
</div>