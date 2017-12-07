<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Privilegiosinternet $privilegiosinternet
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Privilegiosinternet'), ['action' => 'edit', $privilegiosinternet->privilegio_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Privilegiosinternet'), ['action' => 'delete', $privilegiosinternet->privilegio_id], ['confirm' => __('Are you sure you want to delete # {0}?', $privilegiosinternet->privilegio_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Privilegiosinternet'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Privilegiosinternet'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="privilegiosinternet view large-10 medium-8 columns content">
    <h3><?= h($privilegiosinternet->privilegio_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nivel') ?></th>
            <td><?= h($privilegiosinternet->nivel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Des Privilegio') ?></th>
            <td><?= h($privilegiosinternet->des_privilegio) ?></td>
        </tr>
    </table>
</div>
