<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conmutadore $conmutadore
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conmutadore->switch_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conmutadore->switch_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Conmutadores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conmutadores'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="conmutadores form large-10 medium-8 columns content">
    <?= $this->Form->create($conmutadore) ?>
    <fieldset>
        <legend><?= __('Edit Conmutadore') ?></legend>
        <?php
            echo $this->Form->control('numero_serie');
            echo $this->Form->control('marca');
            echo $this->Form->control('numero_puertos');
            echo $this->Form->control('numero_inventario');
            echo $this->Form->control('numero_equipos');
            echo $this->Form->control('fecha_alta');
            echo $this->Form->control('modelo');
            echo $this->Form->control('tiporesguardo_tiporesguardo_id', ['options' => $tiporesguardo]);
            echo $this->Form->control('empleados_empleado_id', ['options' => $empleados]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
