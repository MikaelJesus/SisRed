<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nivelcarrera $nivelcarrera
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Nivelcarrera'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="nivelcarrera form large-10 medium-8 columns content">
    <?= $this->Form->create($nivelcarrera) ?>
    <fieldset>
        <legend><?= __('Add Nivelcarrera') ?></legend>
        <?php
            echo $this->Form->control('des_nivelcarrera');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
