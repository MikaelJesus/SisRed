<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 */
?>

<div id="wrapper">
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">Menu</li>
      <li><?= $this->Form->postLink(
        __('Eliminar Departamento'),
        ['action' => 'delete', $departamento->departamento_id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->departamento_id)]
      )
      ?></li>
      <li><?= $this->Html->link(__('Nuevo Departamento'), ['action' => 'add']) ?></li>
      <li><?= $this->Html->link(__('Lista de Departamentos'), ['action' => 'index']) ?></li>
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

          <?= $this->Form->create($departamento,['class'=>'form-horizontal']) ?>
          <fieldset>
            <legend><h1><?= __('Editar Departamento') ?></h1></legend>
            <div class="form-group">
              <label for="departamento_id" class="col-lg-2 control-label">Clave</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="departamento_id" id="departamento_id" required="required" placeholder="Clave" value=<?php echo $departamento->departamento_id;?>>
              </div>
            </div>
            <div class="form-group">
              <label for="des_departamento" class="col-lg-2 control-label">Descripcion</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="des_departamento" id="des_departamento" required="required" placeholder="Descripcion" value=<?php echo $departamento->des_departamento;?>>
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
