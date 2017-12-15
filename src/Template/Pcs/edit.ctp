<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pc $pc
 */
?>

<div id="wrapper">
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">Menu</li>
      <li><?= $this->Form->postLink(
        __('Eliminar Pc'),
        ['action' => 'delete', $pc->pc_id],
        ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
      )
      ?></li>
      <li><?= $this->Html->link(__('Nueva Pc'), ['action' => 'add']) ?></li>
      <li><?= $this->Html->link(__('Lista de Pcs'), ['action' => 'index']) ?></li>
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

<?= $this->Form->create($pc,['class'=>'form-horizontal']) ?>
  <fieldset>
    <legend><h1><?= __('Agregar Pc') ?></h1></legend>
    <div class="form-group">
      <label for="direccion_mac" class="col-lg-2 control-label">Direccion MAC</label>
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
      <label for="marca" class="col-lg-2 control-label">Modelo</label>
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
      <label for="nombre_red" class="col-lg-2 control-label">Nombre en la Red</label>
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
      <label for="ip" class="col-lg-2 control-label">Direccion Ip</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('ip',['label'=>false,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="antivirus" class="col-lg-2 control-label">Antivirus</label>
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
      <label for="marca_procesador" class="col-lg-2 control-label">Marca del Procesador</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('marca_procesador',['label'=>false,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="modelo_procesador" class="col-lg-2 control-label">Modelo del Procesador</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('modelo_procesador',['label'=>false,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="velocidad_procesador" class="col-lg-2 control-label">Velocidad del Procesador</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('velocidad_procesador',['label'=>false,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="capacidad_disco" class="col-lg-2 control-label">Capacidad del Disco Duro</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('capacidad_disco',['label'=>false,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="capacidad_ram" class="col-lg-2 control-label">Capadidad de Memoria RAM</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('capacidad_ram',['label'=>false,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="tiporesguardo_tiporesguardo_id" class="col-lg-2 control-label">Resguardo</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('tiporesguardo_tiporesguardo_id', ['label'=>false,'class'=>'form-control','options' => $tiporesguardo]);?>
      </div>
    </div>
    <div class="form-group">
      <label for="tipoconexion_tipoconexion_id" class="col-lg-2 control-label">Tipo de Conexion</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('tipoconexion_tipoconexion_id', ['label'=>false,'class'=>'form-control','options' => $tipoconexion]);?>
      </div>
    </div>
    <div class="form-group">
      <label for="tipoequipo_tipoequipo_id" class="col-lg-2 control-label">Tipo de Equipo</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('tipoequipo_tipoequipo_id', ['label'=>false,'class'=>'form-control','options' => $tipoequipo]);?>
      </div>
    </div>
    <div class="form-group">
      <label for="empleados_empleado_id" class="col-lg-2 control-label">Empleado</label>
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