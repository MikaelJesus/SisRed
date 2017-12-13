<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div id="wrapper">
        <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Form->postLink(
                __('Eliminar Usuario'),
                ['action' => 'delete', $user->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Usuarios'), ['action' => 'index']) ?></li>
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

<?= $this->Form->create($user,['class'=>'form-horizontal']) ?>
  <fieldset>
    <legend><h1><?= __('Editar Usuario') ?></h1></legend>
    <div class="form-group">
      <label for="username" class="col-lg-2 control-label">Nombre de Usuario</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="username" id="username" required="required" placeholder="Nombre de Usuario" value=<?php echo $user->username;?>>
      </div>
    </div>
    <div class="form-group">
      <label for="password" class="col-lg-2 control-label">Contraseña</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" id="password" required="required" placeholder="Contraseña">
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Privilegios</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('role_role_id', ['label'=>false,'options' => $role,'class'=>'form-control']);?>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Empleado</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('empleados_empleado_id', ['label'=>false,'options' => $empleados,'class'=>'form-control']);?>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-default">Guardar</button>
      </div>
    </div>
  </fieldset>
<?= $this->Form->end() ?>
</div>
