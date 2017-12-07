<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conmutadore[]|\Cake\Collection\CollectionInterface $conmutadores
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Conmutadore'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="conmutadores index large-10 medium-8 columns content">
    <h3><?= __('Conmutadores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('switch_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('numero_serie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_puertos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_inventario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_equipos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_alta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modelo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tiporesguardo_tiporesguardo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empleados_empleado_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($conmutadores as $conmutadore): ?>
            <tr>
                <!-- <td><?= $this->Number->format($conmutadore->switch_id) ?></td> -->
                <td><?= h($conmutadore->numero_serie) ?></td>
                <td><?= h($conmutadore->marca) ?></td>
                <td><?= h($conmutadore->numero_puertos) ?></td>
                <td><?= h($conmutadore->numero_inventario) ?></td>
                <td><?= h($conmutadore->numero_equipos) ?></td>
                <td><?= h($conmutadore->fecha_alta) ?></td>
                <td><?= h($conmutadore->modelo) ?></td>
                <td><?= $conmutadore->has('tiporesguardo') ? $this->Html->link($conmutadore->tiporesguardo->des_resguardo, ['controller' => 'Tiporesguardo', 'action' => 'view', $conmutadore->tiporesguardo->tiporesguardo_id]) : '' ?></td>
                <td><?= $conmutadore->has('empleado') ? $this->Html->link($conmutadore->empleado->nombre." ".$conmutadore->empleado->apellidop." ".$conmutadore->empleado->apellidom, ['controller' => 'Empleados', 'action' => 'view', $conmutadore->empleado->empleado_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $conmutadore->switch_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conmutadore->switch_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conmutadore->switch_id], ['confirm' => __('Are you sure you want to delete # {0}?', $conmutadore->switch_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
