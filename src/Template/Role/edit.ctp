<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<div id="wrapper">
        <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Form->postLink(
                __('Eliminar Rol'),
                ['action' => 'delete', $role->role_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $role->role_id)]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nuevo Rol'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Roles'), ['action' => 'index']) ?></li>
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

<?= $this->Form->create($role,['class'=>'form-horizontal']) ?>
  <fieldset>
    <legend><h1><?= __('Editar Rol') ?></h1></legend>
    <div class="form-group">
      <label for="role_id" class="col-lg-2 control-label">Nombre de Rol</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="role_id" id="role_id" required="required" placeholder="Nombre de Rol" value=<?php echo $role->des_role;?>>
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