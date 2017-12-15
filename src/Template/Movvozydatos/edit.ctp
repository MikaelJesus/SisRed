<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movvozydato $movvozydato
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $movvozydato->movvozydatos_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $movvozydato->movvozydatos_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Movvozydatos'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="movvozydatos form large-10 medium-8 columns content">
    <?= $this->Form->create($movvozydato) ?>
    <fieldset>
        <legend><?= __('Edit Movvozydato') ?></legend>
        <?php
            echo $this->Form->control('tipo_movimiento');
            echo $this->Form->control('fecha_movimiento');
            echo $this->Form->control('users_user_id', ['options' => $users]);
            echo $this->Form->control('empleados_empleado_id', ['options' => $empleados]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
