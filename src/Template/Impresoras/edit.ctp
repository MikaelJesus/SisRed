<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Impresora $impresora
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $impresora->impresora_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $impresora->impresora_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Impresoras'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Impresora'), ['controller' => 'Impresoras', 'action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="impresoras form large-10 medium-8 columns content">
    <?= $this->Form->create($impresora) ?>
    <fieldset>
        <legend><?= __('Edit Impresora') ?></legend>
        <?php
            echo $this->Form->control('numero_serie');
            echo $this->Form->control('marca');
            echo $this->Form->control('modelo');
            echo $this->Form->control('mac_impresora');
            echo $this->Form->control('ip_impresora');
            echo $this->Form->control('numero_inventario');
            echo $this->Form->control('fecha_alta');
            echo $this->Form->control('velocidad_imprecion');
            echo $this->Form->control('nodo');
            echo $this->Form->control('empleados_empleado_id', ['options' => $empleados]);
            echo $this->Form->control('tipocolor_tipocolor_id', ['options' => $tipocolor]);
            echo $this->Form->control('tipoimpresora_tipoimpresora_id', ['options' => $tipoimpresora]);
            echo $this->Form->control('tiporesguardo_tiporesguardo_id', ['options' => $tiporesguardo]);
            echo $this->Form->control('tipoconexion_tipoconexion_id', ['options' => $tipoconexion]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
