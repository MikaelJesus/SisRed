<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>

<div id="wrapper">
  <div id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">Menu</li>
      <li><?= $this->Form->postLink(
        __('Eliminar Categoria'),
        ['action' => 'delete', $categoria->categoria_id],
        ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
      )
      ?></li>
      <li><?= $this->Html->link(__('Nueva Categoria'), ['action' => 'add']) ?></li>
      <li><?= $this->Html->link(__('Lista de Categorias'), ['action' => 'index']) ?></li>
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

          <?= $this->Form->create($categoria,['class'=>'form-horizontal']) ?>
          <fieldset>
            <legend><h1><?= __('Editar Categoria') ?></h1></legend>
            <div class="form-group">
              <label for="categoria_id" class="col-lg-2 control-label">Clave</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="categoria_id" id="categoria_id" required="required" placeholder="Clave" value=<?php echo $categoria->categoria_id;?>>
              </div>
            </div>
            <div class="form-group">
              <label for="des_categoria" class="col-lg-2 control-label">Descripcion</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="des_categoria" id="des_categoria" required="required" placeholder="Descripcion" value=<?php echo $categoria->des_categoria;?>>
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