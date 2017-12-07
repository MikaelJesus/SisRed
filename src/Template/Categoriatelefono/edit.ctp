<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoriatelefono $categoriatelefono
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $categoriatelefono->categoriatelefono_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $categoriatelefono->categoriatelefono_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Categoriatelefono'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoriatelefono'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="categoriatelefono form large-10 medium-8 columns content">
    <?= $this->Form->create($categoriatelefono) ?>
    <fieldset>
        <legend><?= __('Edit Categoriatelefono') ?></legend>
        <?php
            echo $this->Form->control('des_categoriatelefono');
            echo $this->Form->control('des_nivelasignacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
