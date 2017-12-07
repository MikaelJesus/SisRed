<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoconexion $tipoconexion
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipoconexion'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="tipoconexion form large-10 medium-8 columns content">
    <?= $this->Form->create($tipoconexion) ?>
    <fieldset>
        <legend><?= __('Add Tipoconexion') ?></legend>
        <?php
            echo $this->Form->control('des_tipoconexion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
