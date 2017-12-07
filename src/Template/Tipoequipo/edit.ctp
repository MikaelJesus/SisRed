<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoequipo $tipoequipo
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoequipo->tipoequipo_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoequipo->tipoequipo_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipoequipo'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="tipoequipo form large-10 medium-8 columns content">
    <?= $this->Form->create($tipoequipo) ?>
    <fieldset>
        <legend><?= __('Edit Tipoequipo') ?></legend>
        <?php
            echo $this->Form->control('des_tipoequipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
