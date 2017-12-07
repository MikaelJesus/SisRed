<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statusprofecional $statusprofecional
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $statusprofecional->statusprofecional_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $statusprofecional->statusprofecional_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Statusprofecional'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="statusprofecional form large-10 medium-8 columns content">
    <?= $this->Form->create($statusprofecional) ?>
    <fieldset>
        <legend><?= __('Edit Statusprofecional') ?></legend>
        <?php
            echo $this->Form->control('des_statusprofecional');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
