<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Impresora $impresora
 */
?>

<div id="wrapper">
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">Menu</li>
      <li><?= $this->Form->postLink(
        __('Eliminar Impresora'),
        ['action' => 'delete', $impresora->impresora_id],
        ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
      )
      ?></li>
      <li><?= $this->Html->link(__('Nueva Impresora'), ['action' => 'add']) ?></li>
      <li><?= $this->Html->link(__('Lista de Impresoras'), ['action' => 'index']) ?></li>
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

          
<?= $this->Form->create($impresora,['class'=>'form-horizontal']) ?>
  <fieldset>
    <legend><h1><?= __('Agregar Impresora') ?></h1></legend>
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
      <label for="mac_impresora" class="col-lg-2 control-label">Direccion MAC</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('mac_impresora',['label'=>false,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="ip_impresora" class="col-lg-2 control-label">Direccion Ip</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('ip_impresora',['label'=>false,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="numero_inventario" class="col-lg-2 control-label">Numero en Inventario</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('numero_inventario',['label'=>false,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_alta" class="col-lg-2 control-label">Fecha de Alta(hidden/server time)</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('fecha_alta',['label'=>false,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="velocidad_imprecion" class="col-lg-2 control-label">Velocidad de Impresion</label>
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
      <label for="tipocolor_tipocolor_id" class="col-lg-2 control-label">Tipo de Color</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('tipocolor_tipocolor_id', ['label'=>false,'class'=>'form-control','options' => $tipocolor]);?>
      </div>
    </div>
    <div class="form-group">
      <label for="marca" class="col-lg-2 control-label">Tipo de Impresion</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('tipoimpresora_tipoimpresora_id', ['label'=>false,'class'=>'form-control','options' => $tipoimpresora]);?>
      </div>
    </div>
    <div class="form-group">
      <label for="marca" class="col-lg-2 control-label">Resguardo</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('tiporesguardo_tiporesguardo_id', ['label'=>false,'class'=>'form-control','options' => $tiporesguardo]);?>
      </div>
    </div>
    <div class="form-group">
      <label for="marca" class="col-lg-2 control-label">Tipo de Conexion</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('tipoconexion_tipoconexion_id', ['label'=>false,'class'=>'form-control','options' => $tipoconexion]);?>
      </div>
    </div>
    <div class="form-group">
      <label for="marca" class="col-lg-2 control-label">Empleado</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('empleados_empleado_id', ['label'=>false,'class'=>'form-control','options' => $empleados]);?>
      </div>
    </div>


    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-default">Agregar</button>
      </div>
    </div>
  </fieldset>
<?= $this->Form->end() ?>
</div>