<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Area $area
 */
?>

<div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">Menu</li>
                <li><?= $this->Html->link(__('Lista de Areas'), ['action' => 'index']) ?></li>
                <li><?= $this->element('menu')?></li>
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

<?= $this->Form->create($area,['class'=>'form-horizontal']) ?>
  <fieldset>
    <legend><h1><?= __('Agregar area') ?></h1></legend>
    <div class="form-group">
      <label for="area_id" class="col-lg-2 control-label">Clave</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="area_id" id="area_id" required="required" placeholder="Clave">
      </div>
    </div>
    <div class="form-group">
      <label for="des_area" class="col-lg-2 control-label">Descripcion</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="des_area" id="des_area" required="required" placeholder="Descripcion">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-default">Agregar</button>
      </div>
    </div>
  </fieldset>
<?= $this->Form->end() ?>
</div>