<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recibido $recibido
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recibido'), ['action' => 'edit', $recibido->recibido_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recibido'), ['action' => 'delete', $recibido->recibido_id], ['confirm' => __('Are you sure you want to delete # {0}?', $recibido->recibido_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recibido'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recibido'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="recibido view large-10 medium-8 columns content">
    <h3><?= h($recibido->recibido_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Recibido') ?></th>
            <td><?= h($recibido->des_recibido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recibido Id') ?></th>
            <td><?= $this->Number->format($recibido->recibido_id) ?></td>
        </tr>
    </table>
</div>
