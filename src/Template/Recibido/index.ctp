<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recibido[]|\Cake\Collection\CollectionInterface $recibido
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Nuevo Recibido'), ['action' => 'add']) ?></li>
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
        <h1><?= __('Recibido') ?></h1>


        <table class="table table-striped table-hover ">
         <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('recibido_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('des_recibido') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recibido as $recibido): ?>
            <tr>
                <td><?= $this->Number->format($recibido->recibido_id) ?></td>
                <td><?= h($recibido->des_recibido) ?></td>
                  <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $recibido->recibido_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $recibido->recibido_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $recibido->recibido_id], ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]) ?>
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