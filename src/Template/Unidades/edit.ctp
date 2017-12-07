<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unidade $unidade
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $unidade->unidad_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $unidade->unidad_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Unidades'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="unidades form large-10 medium-8 columns content">
    <?= $this->Form->create($unidade) ?>
    <fieldset>
        <legend><?= __('Edit Unidade') ?></legend>
        <?php
            echo $this->Form->control('des_unidad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
