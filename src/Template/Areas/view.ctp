<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Area $area
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Area'), ['action' => 'edit', $area->area_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area'), ['action' => 'delete', $area->area_id], ['confirm' => __('Are you sure you want to delete # {0}?', $area->area_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Areas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="areas view large-10 medium-8 columns content">
    <h3><?= h($area->area_id) ?></h3>
    <table class="vertical-table">
        <!-- <tr>
            <th scope="row"><?= __('Area') ?></th>
            <td><?= $area->has('area') ? $this->Html->link($area->area->area_id, ['controller' => 'Areas', 'action' => 'view', $area->area->area_id]) : '' ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Des Area') ?></th>
            <td><?= h($area->des_area) ?></td>
        </tr>
    </table>
</div>
