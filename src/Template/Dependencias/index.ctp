<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependencia[]|\Cake\Collection\CollectionInterface $dependencias
 */
?>




<div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">Menu</li>
                <li><?= $this->Html->link(__('Nueva Dependencia'), ['action' => 'add']) ?></li>
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
        <h1><?= __('Dependencias') ?></h1>


<table class="table table-striped table-hover ">
     <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('dependencia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_dependencia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
  <tbody>
    <?php foreach ($dependencias as $dependencia): ?>
    <tr>
      <td><?= h($dependencia->dependencia_id)?></td>
                <td><?= h($dependencia->des_dependencia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dependencia->dependencia_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dependencia->dependencia_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dependencia->dependencia_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependencia->dependencia_id)]) ?>
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