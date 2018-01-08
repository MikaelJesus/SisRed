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





<form method="post" accept-charset="utf-8" class="form-horizontal" action="/SisRed/carreras/pdf.pdf" target="_blank">
    <legend><h1><?= __('Agregar Carrera') ?></h1></legend>
    <div class="form-group">
      <label for="carrera_id" class="col-lg-2 control-label">Id</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="carrera_id" id="carrera_id" placeholder="Descripcion">
      </div>
    </div>
    <div class="form-group">
      <label for="des_carrera" class="col-lg-2 control-label">Descripcion</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="des_carrera" id="des_carrera" placeholder="Descripcion">
      </div>
    </div>
    <div class="form-group">
      <label for="nivelcarrera_nivelcarrera_id" class="col-lg-2 control-label">Nivel de Carrera</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nivelcarrera_nivelcarrera_id" id="nivelcarrera_nivelcarrera_id" placeholder="Descripcion">
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