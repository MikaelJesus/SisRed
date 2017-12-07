<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requerimiento $requerimiento
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Requerimientos'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="requerimientos form large-10 medium-8 columns content">
    <?= $this->Form->create($requerimiento) ?>
    <fieldset>
        <legend><?= __('Add Requerimiento') ?></legend>
        <?php
            echo $this->Form->control('des_requerimiento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
