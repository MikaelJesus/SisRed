<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recibido $recibido
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recibido->recibido_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recibido->recibido_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Recibido'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="recibido form large-10 medium-8 columns content">
    <?= $this->Form->create($recibido) ?>
    <fieldset>
        <legend><?= __('Edit Recibido') ?></legend>
        <?php
            echo $this->Form->control('des_recibido');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
