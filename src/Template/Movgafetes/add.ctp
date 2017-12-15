<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movgafete $movgafete
 */
?>

<div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">Menu</li>
                <li><?= $this->Html->link(__('Lista de Movimientos De Gafetes'), ['action' => 'index']) ?></li>
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

<?= $this->Form->create($movgafete,['class'=>'form-horizontal']) ?>
  <fieldset>
    <legend><h1><?= __('Agregar Movimiento de Gafete') ?></h1></legend>
    <div class="form-group">
      <label for="tipo_movimiento" class="col-lg-2 control-label">Tipo de Movimiento</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('tipo_movimiento',['label'=>false,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="fecha_movimiento" class="col-lg-2 control-label">Fecha</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('fecha_movimiento',['label'=>false,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="users_user_id" class="col-lg-2 control-label">Usuario</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('users_user_id', ['label'=>false,'options' => $users,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="empleados_empleado_id" class="col-lg-2 control-label">Fecha</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('empleados_empleado_id', ['label'=>false,'options' => $empleados,'class'=>'form-control']);?>
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