<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requerimiento $requerimiento
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $requerimiento->requerimiento_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $requerimiento->requerimiento_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Requerimientos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Requerimiento'), ['controller' => 'Requerimientos', 'action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="requerimientos form large-10 medium-8 columns content">
    <?= $this->Form->create($requerimiento) ?>
    <fieldset>
        <legend><?= __('Edit Requerimiento') ?></legend>
        <?php
            echo $this->Form->control('des_requerimiento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
