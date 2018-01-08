<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contratacione $contratacione
 */
?>

<div id="wrapper">
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">Menu</li>
      <li><?= $this->Form->postLink(
        __('Eliminar Contratacion'),
        ['action' => 'delete', $contratacione->contratacion_id],
        ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
      )
      ?></li>
      <li><?= $this->Html->link(__('Nueva contratacion'), ['action' => 'add']) ?></li>
      <li><?= $this->Html->link(__('Lista de contratacions'), ['action' => 'index']) ?></li>
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

          <?= $this->Form->create($contratacione,['class'=>'form-horizontal']) ?>
          <fieldset>
            <legend><h1><?= __('Editar Contratacion') ?></h1></legend>
            <div class="form-group">
              <label for="contratacion_id" class="col-lg-2 control-label">Clave</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="contratacion_id" id="contratacion_id" required="required" placeholder="Clave" value=<?php echo $contratacione->contratacion_id;?>>
              </div>
            </div>
            <div class="form-group">
              <label for="des_contratacion" class="col-lg-2 control-label">Descripcion</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="des_contratacion" id="des_contratacion" required="required" placeholder="Descripcion" value=<?php echo $contratacione->des_contratacion;?>>
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