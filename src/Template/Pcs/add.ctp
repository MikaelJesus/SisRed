<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pc $pc
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pcs'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="pcs form large-10 medium-8 columns content">
    <?= $this->Form->create($pc) ?>
    <fieldset>
        <legend><?= __('Add Pc') ?></legend>
        <?php
            echo $this->Form->control('direccion_mac');
            echo $this->Form->control('marca');
            echo $this->Form->control('modelo_pc');
            echo $this->Form->control('sistema_operativo');
            echo $this->Form->control('nombre_red');
            echo $this->Form->control('grupo_trabajo');
            echo $this->Form->control('ip');
            echo $this->Form->control('antivirus');
            echo $this->Form->control('nodo');
            echo $this->Form->control('edificio');
            echo $this->Form->control('piso');
            echo $this->Form->control('fecha_alta');
            echo $this->Form->control('marca_procesador');
            echo $this->Form->control('modelo_procesador');
            echo $this->Form->control('velocidad_procesador');
            echo $this->Form->control('capacidad_disco');
            echo $this->Form->control('capacidad_ram');
            echo $this->Form->control('tiporesguardo_tiporesguardo_id', ['options' => $tiporesguardo]);
            echo $this->Form->control('tipoconexion_tipoconexion_id', ['options' => $tipoconexion]);
            echo $this->Form->control('tipoequipo_tipoequipo_id', ['options' => $tipoequipo]);
            echo $this->Form->control('empleados_empleado_id', ['options' => $empleados]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
