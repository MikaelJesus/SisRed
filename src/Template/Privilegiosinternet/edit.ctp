<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Privilegiosinternet $privilegiosinternet
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $privilegiosinternet->privilegio_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $privilegiosinternet->privilegio_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Privilegiosinternet'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="privilegiosinternet form large-10 medium-8 columns content">
    <?= $this->Form->create($privilegiosinternet) ?>
    <fieldset>
        <legend><?= __('Edit Privilegiosinternet') ?></legend>
        <?php
            echo $this->Form->control('privilegio_id');
            echo $this->Form->control('nivel');
            echo $this->Form->control('des_privilegio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
