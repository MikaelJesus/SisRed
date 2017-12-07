<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependencia $dependencia
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dependencia->dependencia_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dependencia->dependencia_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dependencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dependencia'), ['controller' => 'Dependencias', 'action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="dependencias form large-10 medium-8 columns content">
    <?= $this->Form->create($dependencia) ?>
    <fieldset>
        <legend><?= __('Edit Dependencia') ?></legend>
        <?php
            echo $this->Form->control('des_dependencia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
