<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependencia $dependencia
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dependencia'), ['action' => 'edit', $dependencia->dependencia_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dependencia'), ['action' => 'delete', $dependencia->dependencia_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependencia->dependencia_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dependencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dependencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="dependencias view large-10 medium-8 columns content">
    <h3><?= h($dependencia->dependencia_id) ?></h3>
    <table class="vertical-table">
        <!-- <tr>
            <th scope="row"><?= __('Dependencia') ?></th>
            <td><?= $dependencia->has('dependencia') ? $this->Html->link($dependencia->dependencia->dependencia_id, ['controller' => 'Dependencias', 'action' => 'view', $dependencia->dependencia->dependencia_id]) : '' ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Des Dependencia') ?></th>
            <td><?= h($dependencia->des_dependencia) ?></td>
        </tr>
    </table>
</div>
