<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contratacione $contratacione
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contratacione'), ['action' => 'edit', $contratacione->contratacion_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contratacione'), ['action' => 'delete', $contratacione->contratacion_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contratacione->contratacion_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contrataciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contratacione'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="contrataciones view large-10 medium-8 columns content">
    <h3><?= h($contratacione->contratacion_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Contratacion') ?></th>
            <td><?= h($contratacione->des_contratacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contratacion Id') ?></th>
            <td><?= $this->Number->format($contratacione->contratacion_id) ?></td>
        </tr>
    </table>
</div>
