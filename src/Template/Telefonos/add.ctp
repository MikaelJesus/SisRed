<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefono $telefono
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Telefonos'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="telefonos form large-10 medium-8 columns content">
    <?= $this->Form->create($telefono) ?>
    <fieldset>
        <legend><?= __('Add Telefono') ?></legend>
        <?php
            echo $this->Form->control('mac_telefono');
            echo $this->Form->control('extencion_telefono');
            echo $this->Form->control('modelo_telefono');
            echo $this->Form->control('numero_serie');
            echo $this->Form->control('numero_inventario');
            echo $this->Form->control('fecha_alta');
            echo $this->Form->control('empleados_empleado_id', ['options' => $empleados]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
