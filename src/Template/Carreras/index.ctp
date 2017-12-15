<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrera[]|\Cake\Collection\CollectionInterface $carreras
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Nueva Carrera'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Exportar a Excel'), ['action' => 'export']) ?></li>
            <li><?= $this->Html->link(__('Exportar a PDF'), ['action' => 'pdf','_ext' => 'pdf']); ?></li>
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
        <h1><?= __('Carreras') ?></h1>

        <form method="post" accept-charset="utf-8" class="form-horizontal" action="/SisRed/carreras/pdf.pdf">
    <legend><h1><?= __('Agregar Carrera') ?></h1></legend>
    <div class="form-group">
      <label for="des_carrera" class="col-lg-2 control-label">Descripcion</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="des_carrera" id="des_carrera" placeholder="Descripcion">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-default">PDF</button>
      </div>
    </div>
  </fieldset>
<?= $this->Form->end() ?>
</div>


        <table class="table table-striped table-hover ">
         <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Carrera') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nivel') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carreras as $carrera): ?>
                <tr>
                  <!-- <td><?= h($carrera->carrera_id)?></td> -->
                  <td><?= h($carrera->des_carrera) ?></td>
                  <td><?= $carrera->has('nivelcarrera') ? $this->Html->link($carrera->nivelcarrera->des_nivelcarrera, ['controller' => 'Nivelcarrera', 'action' => 'view', $carrera->nivelcarrera->nivelcarrera_id]) : '' ?></td>
                  <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $carrera->carrera_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $carrera->carrera_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $carrera->carrera_id], ['confirm' => __('Are you sure you want to delete # {0}?', $carrera->carrera_id)]) ?>
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