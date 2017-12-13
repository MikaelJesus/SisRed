<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role[]|\Cake\Collection\CollectionInterface $role
 */
?>

<div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">Menu</li>
                <li><?= $this->Html->link(__('Nuevo Rol'), ['action' => 'add']) ?></li>
                <li><?= $this->element('menu')?></li>
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


    <h1><?= __('Roles') ?></h1>
    



<table class="table table-striped table-hover ">
          <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID Rol') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Descipcion') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
  <tbody>
            <?php foreach ($role as $role): ?>
            <tr>
                <td><?= $this->Number->format($role->role_id) ?></td>
                <td><?= h($role->des_role) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $role->role_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $role->role_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $role->role_id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->role_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
</table>



    <div class="text-center">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, Mostrando {{current}} columna(s) de {{count}} en total')]) ?></p>
    </div>

</div>
