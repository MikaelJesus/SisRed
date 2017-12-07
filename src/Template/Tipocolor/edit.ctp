<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipocolor $tipocolor
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipocolor->tipocolor_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipocolor->tipocolor_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipocolor'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="tipocolor form large-10 medium-8 columns content">
    <?= $this->Form->create($tipocolor) ?>
    <fieldset>
        <legend><?= __('Edit Tipocolor') ?></legend>
        <?php
            echo $this->Form->control('des_tipocolor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
