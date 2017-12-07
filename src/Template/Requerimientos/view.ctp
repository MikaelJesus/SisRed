<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requerimiento $requerimiento
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Requerimiento'), ['action' => 'edit', $requerimiento->requerimiento_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Requerimiento'), ['action' => 'delete', $requerimiento->requerimiento_id], ['confirm' => __('Are you sure you want to delete # {0}?', $requerimiento->requerimiento_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Requerimientos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requerimiento'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="requerimientos view large-10 medium-8 columns content">
    <h3><?= h($requerimiento->requerimiento_id) ?></h3>
    <table class="vertical-table">
        <!-- <tr>
            <th scope="row"><?= __('Requerimiento') ?></th>
            <td><?= $requerimiento->has('requerimiento') ? $this->Html->link($requerimiento->requerimiento->requerimiento_id, ['controller' => 'Requerimientos', 'action' => 'view', $requerimiento->requerimiento->requerimiento_id]) : '' ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Des Requerimiento') ?></th>
            <td><?= h($requerimiento->des_requerimiento) ?></td>
        </tr>
    </table>
</div>
