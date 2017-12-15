<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movgafete $movgafete
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $movgafete->movgafete_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $movgafete->movgafete_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Movgafetes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movgafete'), ['controller' => 'Movgafetes', 'action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="movgafetes form large-10 medium-8 columns content">
    <?= $this->Form->create($movgafete) ?>
    <fieldset>
        <legend><?= __('Edit Movgafete') ?></legend>
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
