<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statusrequerimiento $statusrequerimiento
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $statusrequerimiento->statusrequerimiento_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $statusrequerimiento->statusrequerimiento_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Statusrequerimiento'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="statusrequerimiento form large-10 medium-8 columns content">
    <?= $this->Form->create($statusrequerimiento) ?>
    <fieldset>
        <legend><?= __('Edit Statusrequerimiento') ?></legend>
        <?php
            echo $this->Form->control('des_statusrequerimiento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
