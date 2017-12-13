<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoriatelefono $categoriatelefono
 */
?>

<div id="wrapper">
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">Menu</li>
      <li><?= $this->Form->postLink(
        __('Eliminar Categoria de Telefono'),
        ['action' => 'delete', $categoriatelefono->categoriatelefono_id],
        ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
      )
      ?></li>
      <li><?= $this->Html->link(__('Nueva Categoria de Telefono'), ['action' => 'add']) ?></li>
      <li><?= $this->Html->link(__('Lista de Categoria de Telefono'), ['action' => 'index']) ?></li>
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

          <?= $this->Form->create($categoriatelefono,['class'=>'form-horizontal']) ?>
          <fieldset>
            <legend><h1><?= __('Editar Categoria de Telefono') ?></h1></legend>
            <div class="form-group">
              <label for="categoriatelefono_id" class="col-lg-2 control-label">Clave</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="categoriatelefono_id" id="categoriatelefono_id" required="required" placeholder="Clave" value=<?php echo $categoriatelefono->categoriatelefono_id;?>>
              </div>
            </div>
            <div class="form-group">
              <label for="des_categoriatelefono" class="col-lg-2 control-label">Descripcion</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="des_categoriatelefono" id="des_categoriatelefono" required="required" placeholder="Descripcion" value=<?php echo str_replace(" ", "&nbsp;" ,$categoriatelefono->des_categoriatelefono);?>>
              </div>
            </div>
            <div class="form-group">
              <label for="des_nivelasignacion" class="col-lg-2 control-label">Nivel</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="des_nivelasignacion" id="des_nivelasignacion" required="required" placeholder="Descripcion" value=<?php echo str_replace(" ", "&nbsp;" ,$categoriatelefono->des_nivelasignacion);?>>
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