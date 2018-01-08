<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recibido $recibido
 */
?>

<div id="wrapper">
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">Menu</li>
      <li><?= $this->Form->postLink(
        __('Eliminar Recibido'),
        ['action' => 'delete', $recibido->recibido_id],
        ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
      )
      ?></li>
      <li><?= $this->Html->link(__('Nuevo Recibido'), ['action' => 'add']) ?></li>
      <li><?= $this->Html->link(__('Lista de Recibidos'), ['action' => 'index']) ?></li>
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

          <?= $this->Form->create($recibido,['class'=>'form-horizontal']) ?>
          <fieldset>
            <legend><h1><?= __('Editar Recibido') ?></h1></legend>
            <div class="form-group">
              <label for="recibido_id" class="col-lg-2 control-label">Clave</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="recibido_id" id="recibido_id" required="required" placeholder="Clave" value=<?php echo $recibido->recibido_id;?>>
              </div>
            </div>
            <div class="form-group">
              <label for="des_recibido" class="col-lg-2 control-label">Descripcion</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="des_recibido" id="des_recibido" required="required" placeholder="Descripcion" value=<?php echo $recibido->des_recibido;?>>
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
