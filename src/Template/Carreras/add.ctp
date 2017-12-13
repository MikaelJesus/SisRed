<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrera $carrera
 */
?>

<div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">Menu</li>
                <li><?= $this->Html->link(__('Lista de Carreras'), ['action' => 'index']) ?></li>
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

<?= $this->Form->create($carrera,['class'=>'form-horizontal']) ?>
  <fieldset>
    <legend><h1><?= __('Agregar Carrera') ?></h1></legend>
    <div class="form-group">
      <label for="des_carrera" class="col-lg-2 control-label">Descripcion</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="des_carrera" id="des_carrera" required="required" placeholder="Descripcion">
      </div>
    </div>
    <div class="form-group">
      <label for="des_carrera" class="col-lg-2 control-label">Nivel de Carrera</label>
      <div class="col-lg-10">
        <?php echo $this->Form->control('nivelcarrera_nivelcarrera_id', ['label'=>false,'options' => $nivelcarrera,'class'=>'form-control']);?>
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




<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Carreras'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="carreras form large-10 medium-8 columns content">
    <?= $this->Form->create($carrera) ?>
    <fieldset>
        <legend><?= __('Add Carrera') ?></legend>
        <?php
            echo $this->Form->control('des_carrera');
            echo $this->Form->control('nivelcarrera_nivelcarrera_id', ['options' => $nivelcarrera]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
