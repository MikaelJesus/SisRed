<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Privilegiosinternet $privilegiosinternet
 */
?>

<div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">Menu</li>
                <li><?= $this->Html->link(__('Lista de Privilegios de Internet'), ['action' => 'index']) ?></li>
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

<?= $this->Form->create($privilegiosinternet,['class'=>'form-horizontal']) ?>
          <fieldset>
            <legend><h1><?= __('Agregar Privilegio de Internet') ?></h1></legend>
            <div class="form-group">
              <label for="privilegio_id" class="col-lg-2 control-label">Clave</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="privilegio_id" id="privilegio_id" required="required">
              </div>
            </div>
            <div class="form-group">
              <label for="nivel" class="col-lg-2 control-label">Nivel</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('nivel', ['label'=>false,'class'=>'form-control']);?>
              </div>
            </div>
            <div class="form-group">
              <label for="des_privilegio" class="col-lg-2 control-label">Descripcion</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('des_privilegio', ['label'=>false,'class'=>'form-control']);?>
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