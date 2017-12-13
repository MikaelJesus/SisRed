<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Usuario'), ['action' => 'edit',$user->user_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Usuario'),
                ['action' => 'delete', $user->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Usuarios'), ['action' => 'index']) ?></li>
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
        <h1><?= __('Usuario') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2> <?= h($user->username) ?></h2>
        </div>
        <div class="panel-body">
            <?= $user->has('empleado') ? $this->Html->link($user->empleado->nombre." ".$user->empleado->apellidop." ".$user->empleado->apellidom, ['controller' => 'Empleados', 'action' => 'view', $user->empleado->empleado_id]) : '' ?>
        </div>
        <div class="panel-body">
            <?= $user->has('role') ? $this->Html->link($user->role->des_role, ['controller' => 'Role', 'action' => 'view', $user->role->role_id]) : '' ?>
        </div>
    </div>

</div>