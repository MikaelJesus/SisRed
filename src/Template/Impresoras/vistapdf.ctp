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





<form method="post" accept-charset="utf-8" class="form-horizontal" action="/SisRed/impresoras/pdf.pdf" target="_blank">
    <legend><h1><?= __('PDF') ?></h1></legend>
    <div class="form-group">
      <label for="impresora_id" class="col-lg-2 control-label">Impresora ID</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="impresora_id" id="impresora_id">
      </div>
    </div>
    <div class="form-group">
              <label for="numero_serie" class="col-lg-2 control-label">Numero de Serie</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('numero_serie',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="marca" class="col-lg-2 control-label">Marca</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('marca',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="modelo" class="col-lg-2 control-label">Modelo</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('modelo',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="mac_impresora" class="col-lg-2 control-label">Mac de Impresora</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('mac_impresora',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="ip_impresora" class="col-lg-2 control-label">Ip de Impresora</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('ip_impresora',['label'=>false,'class'=>'form-control']);?>
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
              <label for="velocidad_imprecion" class="col-lg-2 control-label">Velocidad de Imprecion</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('velocidad_imprecion',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="nodo" class="col-lg-2 control-label">Nodo</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('nodo',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="tiporesguardo_tiporesguardo_id" class="col-lg-2 control-label">Resguardo</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="tiporesguardo_tiporesguardo_id" id="tiporesguardo_tiporesguardo_id">
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