<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centrodetrabajo $centrodetrabajo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Centrodetrabajo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="centrodetrabajo form large-9 medium-8 columns content">
    <?= $this->Form->create($centrodetrabajo) ?>
    <fieldset>
        <legend><?= __('Add Centrodetrabajo') ?></legend>
        <?php
            echo $this->Form->control('des_departamento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
