<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoriatelefono $categoriatelefono
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categoriatelefono'), ['action' => 'edit', $categoriatelefono->categoriatelefono_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoriatelefono'), ['action' => 'delete', $categoriatelefono->categoriatelefono_id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriatelefono->categoriatelefono_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categoriatelefono'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoriatelefono'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="categoriatelefono view large-10 medium-8 columns content">
    <h3><?= h($categoriatelefono->categoriatelefono_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Des Categoriatelefono') ?></th>
            <td><?= h($categoriatelefono->des_categoriatelefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Des Nivelasignacion') ?></th>
            <td><?= h($categoriatelefono->des_nivelasignacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoriatelefono Id') ?></th>
            <td><?= $this->Number->format($categoriatelefono->categoriatelefono_id) ?></td>
        </tr>
    </table>
</div>
