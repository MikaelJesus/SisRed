<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleado $empleado
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Empleados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empleado'), ['controller' => 'Empleados', 'action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="empleados form large-10 medium-8 columns content">
    <?= $this->Form->create($empleado,['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Add Empleado') ?></legend>
        <?php
            echo $this->Form->control('nue');
            echo $this->Form->control('nup');
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellidop');
            echo $this->Form->control('apellidom');
            echo $this->Form->control('curp');
            echo $this->Form->control('rfc');
            echo $this->Form->control('categorias_categoria_id', ['options' => $categorias]);
            echo $this->Form->control('dependencias_dependencia_id', ['options' => $dependencias]);
            echo $this->Form->control('areas_area_id', ['options' => $areas]);
            echo $this->Form->control('unidades_unidad_id', ['options' => $unidades]);
            echo $this->Form->control('departamentos_departamento_id', ['options' => $departamentos]);
            echo $this->Form->control('fecha_gafete');
            echo $this->Form->control('sexo');
            echo $this->Form->control('carreras_carrera_id', ['options' => $carreras]);
            echo $this->Form->control('statusprofecional_statusprofecional_id', ['options' => $statusprofecional]);
            echo $this->Form->control('contrataciones_contratacion_id', ['options' => $contrataciones]);
            echo $this->Form->control('status_status_id', ['options' => $status]);
            echo $this->Form->control('domicilio');
            echo $this->Form->control('telefono_local');
            echo $this->Form->control('telefono_celular');
            echo $this->Form->control('foto', ['type' => 'file']);
            echo $this->Form->control('email');
            echo $this->Form->control('privilegiosinternet_privilegio_id', ['options' => $privilegiosinternet, 'empty' => true]);
            echo $this->Form->control('categoriatelefono_categoriatelefono_id', ['options' => $categoriatelefono, 'empty' => true]);
            echo $this->Form->control('observaciones');
            echo $this->Form->control('clave_imss');
            echo $this->Form->control('nombre_emergencia');
            echo $this->Form->control('apellidop_emergencia');
            echo $this->Form->control('apellidom_emergencia');
            echo $this->Form->control('tel_emergencia');
            echo $this->Form->control('tipo_sangre');
            echo $this->Form->control('alergias');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
