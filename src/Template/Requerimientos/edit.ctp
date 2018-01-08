<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requerimiento $requerimiento
 */
?>

<div id="wrapper">
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">Menu</li>
      <li><?= $this->Form->postLink(
        __('Eliminar Requerimiento'),
        ['action' => 'delete', $requerimiento->requerimiento_id],
        ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
      )
      ?></li>
      <li><?= $this->Html->link(__('Nuevo Requerimiento'), ['action' => 'add']) ?></li>
      <li><?= $this->Html->link(__('Lista de Requerimientos'), ['action' => 'index']) ?></li>
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

          <?= $this->Form->create($requerimiento,['class'=>'form-horizontal']) ?>
          <fieldset>
            <legend><h1><?= __('Editar Requerimiento') ?></h1></legend>
            <div class="form-group">
              <label for="requerimiento_id" class="col-lg-2 control-label">Clave</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="requerimiento_id" id="requerimiento_id" required="required" placeholder="Clave" value=<?php echo $requerimiento->requerimiento_id;?>>
              </div>
            </div>
            <div class="form-group">
              <label for="des_requerimiento" class="col-lg-2 control-label">Descripcion</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="des_requerimiento" id="des_requerimiento" required="required" placeholder="Descripcion" value=<?php echo $requerimiento->des_requerimiento;?>>
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