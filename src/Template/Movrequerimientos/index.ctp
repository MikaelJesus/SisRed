<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movrequerimiento[]|\Cake\Collection\CollectionInterface $movrequerimientos
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Movrequerimiento'), ['action' => 'add']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="movrequerimientos index large-10 medium-8 columns content">
    <h3><?= __('Movrequerimientos') ?></h3>
    <?php if(!$movrequerimientos->isempty()):?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Folio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fech_req') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requerimientos_requerimiento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('peticion') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('cpu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monitor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teclado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mouse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('impresora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('corriente_pc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('corriente_impresora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usb_impresora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('otro') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('solicitud') ?></th>
                <?php if ($Auth->user('role_role_id')!=3): ?>
                <th scope="col"><?= $this->Paginator->sort('fech_entrega') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comentario') ?></th>
                <?php endif ?>
                <th scope="col"><?= $this->Paginator->sort('statusrequerimiento_statusrequerimiento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recibido_recibido_id') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('users_user_id1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_user_id2') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movrequerimientos as $movrequerimiento): ?>
            <tr>
                <td><?= h($movrequerimiento->movrequerimientos_id) ?></td>
                <td><?= h($movrequerimiento->fech_req) ?></td>
                <td><?= $movrequerimiento->has('requerimiento') ? $this->Html->link($movrequerimiento->requerimiento->des_requerimiento, ['controller' => 'Requerimientos', 'action' => 'view', $movrequerimiento->requerimiento->requerimiento_id]) : '' ?></td>
                <td><?= h($movrequerimiento->peticion) ?></td>
                <!-- <td><?= h($movrequerimiento->cpu) ?></td>
                <td><?= h($movrequerimiento->monitor) ?></td>
                <td><?= h($movrequerimiento->teclado) ?></td>
                <td><?= h($movrequerimiento->mouse) ?></td>
                <td><?= h($movrequerimiento->impresora) ?></td>
                <td><?= h($movrequerimiento->corriente_pc) ?></td>
                <td><?= h($movrequerimiento->corriente_impresora) ?></td>
                <td><?= h($movrequerimiento->usb_impresora) ?></td>
                <td><?= h($movrequerimiento->otro) ?></td> -->
                <td><?= h($movrequerimiento->solicitud) ?></td>
                <?php if ($Auth->user('role_role_id')!=3): ?>
                <td><?= h($movrequerimiento->fech_entrega) ?></td>
                <td><?= h($movrequerimiento->comentario) ?></td>
                <?php endif ?>
                <td><?= $movrequerimiento->has('statusrequerimiento') ? $this->Html->link($movrequerimiento->statusrequerimiento->des_statusrequerimiento, ['controller' => 'Statusrequerimiento', 'action' => 'view', $movrequerimiento->statusrequerimiento->statusrequerimiento_id]) : '' ?></td>
                <td><?= $movrequerimiento->has('recibido') ? $this->Html->link($movrequerimiento->recibido->des_recibido, ['controller' => 'Recibido', 'action' => 'view', $movrequerimiento->recibido->recibido_id]) : '' ?></td>
                <!-- <td><?= $this->Number->format($movrequerimiento->users_user_id1) ?></td>
                <td><?= $this->Number->format($movrequerimiento->users_user_id2) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $movrequerimiento->movrequerimientos_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movrequerimiento->movrequerimientos_id]) ?>
                    <?php if ($Auth->user('role_role_id')!=3): ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movrequerimiento->movrequerimientos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $movrequerimiento->movrequerimientos_id)]) ?>
                    <?php endif ?>
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
    <?php endif?>
</div>
