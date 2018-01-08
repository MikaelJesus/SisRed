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





<form method="post" accept-charset="utf-8" class="form-horizontal" action="/SisRed/users/pdf.pdf" target="_blank">
    <legend><h1><?= __('PDF') ?></h1></legend>
    <div class="form-group">
      <label for="users_id" class="col-lg-2 control-label">Usuario ID</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="users_id" id="users_id">
      </div>
    </div>
    <div class="form-group">
              <label for="username" class="col-lg-2 control-label">Nombre de Usuario</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('username',['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="role_role_id" class="col-lg-2 control-label">Rol</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="role_role_id" id="role_role_id">
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