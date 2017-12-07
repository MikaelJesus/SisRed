<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiporesguardo $tiporesguardo
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tiporesguardo'), ['action' => 'edit', $tiporesguardo->tiporesguardo_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tiporesguardo'), ['action' => 'delete', $tiporesguardo->tiporesguardo_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiporesguardo->tiporesguardo_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tiporesguardo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tiporesguardo'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="tiporesguardo view large-10 medium-8 columns content">
    <h3><?= h($tiporesguardo->tiporesguardo_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Resguardo') ?></th>
            <td><?= h($tiporesguardo->des_resguardo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tiporesguardo Id') ?></th>
            <td><?= $this->Number->format($tiporesguardo->tiporesguardo_id) ?></td>
        </tr>
    </table>
</div>
