<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->categoria_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->categoria_id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->categoria_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="categorias view large-10 medium-8 columns content">
    <h3><?= h($categoria->categoria_id) ?></h3>
    <table class="vertical-table">
        <!-- <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $categoria->has('categoria') ? $this->Html->link($categoria->categoria->categoria_id, ['controller' => 'Categorias', 'action' => 'view', $categoria->categoria->categoria_id]) : '' ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Des Categoria') ?></th>
            <td><?= h($categoria->des_categoria) ?></td>
        </tr>
    </table>
</div>
