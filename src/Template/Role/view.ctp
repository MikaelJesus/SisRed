<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Rol'), ['action' => 'edit',$role->role_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Rol'),
                ['action' => 'delete', $role->role_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $role->role_id)]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nuevo Rol'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Roles'), ['action' => 'index']) ?></li>
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
        <h1><?= __('Rol') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2> <?= h($role->role_id) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($role->des_role) ?>
        </div>
    </div>

</div>
