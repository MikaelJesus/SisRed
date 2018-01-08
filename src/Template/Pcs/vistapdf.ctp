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





<form method="post" accept-charset="utf-8" class="form-horizontal" action="/SisRed/pcs/pdf.pdf" target="_blank">
    <legend><h1><?= __('PDF') ?></h1></legend>
    <div class="form-group">
      <label for="pc_id" class="col-lg-2 control-label">Pc ID</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="pc_id" id="pc_id">
      </div>
    </div>
    <div class="form-group">
              <label for="direccion_mac" class="col-lg-2 control-label">Direccion Mac</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('direccion_mac',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="marca" class="col-lg-2 control-label">Marca</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('marca',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="modelo_pc" class="col-lg-2 control-label">Modelo Pc</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('modelo_pc',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="sistema_operativo" class="col-lg-2 control-label">Sistema Operativo</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('sistema_operativo',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="nombre_red" class="col-lg-2 control-label">Nombre En La Red</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('nombre_red',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="grupo_trabajo" class="col-lg-2 control-label">Grupo de Trabajo</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('grupo_trabajo',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="ip" class="col-lg-2 control-label">Direccion de IP</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('ip',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="antivirus" class="col-lg-2 control-label">Grupo de Trabajo</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('antivirus',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="nodo" class="col-lg-2 control-label">Nodo</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('nodo',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="edificio" class="col-lg-2 control-label">Edificio</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('edificio',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="piso" class="col-lg-2 control-label">Piso</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('piso',['label'=>false,'class'=>'form-control']);?>
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
              <label for="marca_procesador" class="col-lg-2 control-label">marca_procesador</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('marca_procesador',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="modelo_procesador" class="col-lg-2 control-label">modelo_procesador</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('modelo_procesador',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="velocidad_procesador" class="col-lg-2 control-label">velocidad_procesador</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('velocidad_procesador',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="capacidad_disco" class="col-lg-2 control-label">capacidad_disco</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('capacidad_disco',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="capacidad_ram" class="col-lg-2 control-label">capacidad_ram</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('capacidad_ram',['label'=>false,'class'=>'form-control']);?>
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