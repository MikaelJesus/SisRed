<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contratacione $contratacione
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contratacione->contratacion_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contratacione->contratacion_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contrataciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrataciones'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="contrataciones form large-10 medium-8 columns content">
    <?= $this->Form->create($contratacione) ?>
    <fieldset>
        <legend><?= __('Edit Contratacione') ?></legend>
        <?php
            echo $this->Form->control('des_contratacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
