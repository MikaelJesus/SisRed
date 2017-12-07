<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoriatelefono $categoriatelefono
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Categoriatelefono'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="categoriatelefono form large-10 medium-8 columns content">
    <?= $this->Form->create($categoriatelefono) ?>
    <fieldset>
        <legend><?= __('Add Categoriatelefono') ?></legend>
        <?php
            echo $this->Form->control('des_categoriatelefono');
            echo $this->Form->control('des_nivelasignacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
