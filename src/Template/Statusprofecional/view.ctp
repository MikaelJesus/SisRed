<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statusprofecional $statusprofecional
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Statusprofecional'), ['action' => 'edit', $statusprofecional->statusprofecional_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Statusprofecional'), ['action' => 'delete', $statusprofecional->statusprofecional_id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusprofecional->statusprofecional_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Statusprofecional'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusprofecional'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="statusprofecional view large-10 medium-8 columns content">
    <h3><?= h($statusprofecional->statusprofecional_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Statusprofecional') ?></th>
            <td><?= h($statusprofecional->des_statusprofecional) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusprofecional Id') ?></th>
            <td><?= $this->Number->format($statusprofecional->statusprofecional_id) ?></td>
        </tr>
    </table>
</div>