<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipocolor $tipocolor
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipocolor'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="tipocolor form large-10 medium-8 columns content">
    <?= $this->Form->create($tipocolor) ?>
    <fieldset>
        <legend><?= __('Add Tipocolor') ?></legend>
        <?php
            echo $this->Form->control('des_tipocolor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
