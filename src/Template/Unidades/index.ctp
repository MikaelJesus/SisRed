<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unidade[]|\Cake\Collection\CollectionInterface $unidades
 */
?>
<div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">Menu</li>
                <li><?= $this->Html->link(__('Nueva Unidad'), ['action' => 'add']) ?></li>
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
        <h1><?= __('Unidades') ?></h1>


<table class="table table-striped table-hover ">
     <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Clave') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Descripcion') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
  <tbody>
    <?php foreach ($unidades as $unidad): ?>
    <tr>
      <td><?= h($unidad->unidad_id)?></td>
                <td><?= h($unidad->des_unidad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $unidad->unidad_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $unidad->unidad_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $unidad->unidad_id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidad->unidad_id)]) ?>
                </td>
    </tr>
    <?php endforeach; ?>
    <tr>
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