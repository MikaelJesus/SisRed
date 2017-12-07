<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statusrequerimiento $statusrequerimiento
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Statusrequerimiento'), ['action' => 'edit', $statusrequerimiento->statusrequerimiento_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Statusrequerimiento'), ['action' => 'delete', $statusrequerimiento->statusrequerimiento_id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusrequerimiento->statusrequerimiento_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Statusrequerimiento'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusrequerimiento'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="statusrequerimiento view large-10 medium-8 columns content">
    <h3><?= h($statusrequerimiento->statusrequerimiento_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Statusrequerimiento') ?></th>
            <td><?= h($statusrequerimiento->des_statusrequerimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusrequerimiento Id') ?></th>
            <td><?= $this->Number->format($statusrequerimiento->statusrequerimiento_id) ?></td>
        </tr>
    </table>
</div>
