<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programa $programa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Programa'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="programa form large-9 medium-8 columns content">
    <?= $this->Form->create($programa) ?>
    <fieldset>
        <legend><?= __('Add Programa') ?></legend>
        <?php
            echo $this->Form->control('des_unidad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
