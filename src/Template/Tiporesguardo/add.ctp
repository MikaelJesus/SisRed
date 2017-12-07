<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiporesguardo $tiporesguardo
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tiporesguardo'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="tiporesguardo form large-10 medium-8 columns content">
    <?= $this->Form->create($tiporesguardo) ?>
    <fieldset>
        <legend><?= __('Add Tiporesguardo') ?></legend>
        <?php
            echo $this->Form->control('des_resguardo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
