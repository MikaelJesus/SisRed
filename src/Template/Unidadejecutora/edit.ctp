<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unidadejecutora $unidadejecutora
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $unidadejecutora->area_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $unidadejecutora->area_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Unidadejecutora'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="unidadejecutora form large-9 medium-8 columns content">
    <?= $this->Form->create($unidadejecutora) ?>
    <fieldset>
        <legend><?= __('Edit Unidadejecutora') ?></legend>
        <?php
            echo $this->Form->control('des_area');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
