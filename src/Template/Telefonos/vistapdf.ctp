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





<form method="post" accept-charset="utf-8" class="form-horizontal" action="/SisRed/telefonos/pdf.pdf" target="_blank">
    <legend><h1><?= __('PDF') ?></h1></legend>
    <div class="form-group">
      <label for="telefono_id" class="col-lg-2 control-label">Telefono ID</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="telefono_id" id="telefono_id">
      </div>
    </div>
    <div class="form-group">
              <label for="mac_telefono" class="col-lg-2 control-label">Mac del Telefono</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('mac_telefono',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="extencion_telefono" class="col-lg-2 control-label">Extencion del Telefono</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('extencion_telefono',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="modelo_telefono" class="col-lg-2 control-label">Modelo del Telefono</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('modelo_telefono',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="numero_serie" class="col-lg-2 control-label">Numero de Serie</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('numero_serie',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="numero_inventario" class="col-lg-2 control-label">Numero de Inventario</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('numero_inventario',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="fecha_alta" class="col-lg-2 control-label">Fecha de Alta</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('fecha_alta',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="empleados_empleado_id" class="col-lg-2 control-label">Empleado</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="empleados_empleado_id" id="empleados_empleado_id">
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