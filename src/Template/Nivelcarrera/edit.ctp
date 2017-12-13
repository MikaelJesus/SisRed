<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nivelcarrera $nivelcarrera
 */
?>

<div id="wrapper">
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">Menu</li>
      <li><?= $this->Form->postLink(
        __('Eliminar Niveles de Carreras'),
        ['action' => 'delete', $nivelcarrera->nivelcarrera_id],
        ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
      )
      ?></li>
      <li><?= $this->Html->link(__('Nuevo Nivel de Carrera'), ['action' => 'add']) ?></li>
      <li><?= $this->Html->link(__('Lista de Niveles de Carreras'), ['action' => 'index']) ?></li>
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

          <?= $this->Form->create($nivelcarrera,['class'=>'form-horizontal']) ?>
          <fieldset>
            <legend><h1><?= __('Editar Nivel de Carrera') ?></h1></legend>
            <div class="form-group">
              <label for="des_nivelcarrera" class="col-lg-2 control-label">Descripcion</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="des_nivelcarrera" id="des_nivelcarrera" required="required" placeholder="Descripcion" value=<?php echo $nivelcarrera->des_nivelcarrera;?>>
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