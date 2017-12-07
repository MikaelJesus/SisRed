<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoimpresora $tipoimpresora
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoimpresora->tipoimpresora_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoimpresora->tipoimpresora_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipoimpresora'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="tipoimpresora form large-10 medium-8 columns content">
    <?= $this->Form->create($tipoimpresora) ?>
    <fieldset>
        <legend><?= __('Edit Tipoimpresora') ?></legend>
        <?php
            echo $this->Form->control('des_tipoimpresora');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
