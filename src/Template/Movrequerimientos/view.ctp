<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movrequerimiento $movrequerimiento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movrequerimiento'), ['action' => 'edit', $movrequerimiento->movrequerimientos_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movrequerimiento'), ['action' => 'delete', $movrequerimiento->movrequerimientos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $movrequerimiento->movrequerimientos_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movrequerimientos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movrequerimiento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movrequerimientos'), ['controller' => 'Movrequerimientos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movrequerimiento'), ['controller' => 'Movrequerimientos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Requerimientos'), ['controller' => 'Requerimientos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requerimiento'), ['controller' => 'Requerimientos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Statusrequerimiento'), ['controller' => 'Statusrequerimiento', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Statusrequerimiento'), ['controller' => 'Statusrequerimiento', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recibido'), ['controller' => 'Recibido', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recibido'), ['controller' => 'Recibido', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="movrequerimientos view large-9 medium-8 columns content">
    <h3><?= h($movrequerimiento->movrequerimientos_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Movrequerimiento') ?></th>
            <td><?= $movrequerimiento->has('movrequerimiento') ? $this->Html->link($movrequerimiento->movrequerimiento->movrequerimientos_id, ['controller' => 'Movrequerimientos', 'action' => 'view', $movrequerimiento->movrequerimiento->movrequerimientos_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requerimiento') ?></th>
            <td><?= $movrequerimiento->has('requerimiento') ? $this->Html->link($movrequerimiento->requerimiento->requerimiento_id, ['controller' => 'Requerimientos', 'action' => 'view', $movrequerimiento->requerimiento->requerimiento_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Peticion') ?></th>
            <td><?= h($movrequerimiento->peticion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpu') ?></th>
            <td><?= h($movrequerimiento->cpu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monitor') ?></th>
            <td><?= h($movrequerimiento->monitor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teclado') ?></th>
            <td><?= h($movrequerimiento->teclado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mouse') ?></th>
            <td><?= h($movrequerimiento->mouse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Impresora') ?></th>
            <td><?= h($movrequerimiento->impresora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Corriente Pc') ?></th>
            <td><?= h($movrequerimiento->corriente_pc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Corriente Impresora') ?></th>
            <td><?= h($movrequerimiento->corriente_impresora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usb Impresora') ?></th>
            <td><?= h($movrequerimiento->usb_impresora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Otro') ?></th>
            <td><?= h($movrequerimiento->otro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Solicitud') ?></th>
            <td><?= h($movrequerimiento->solicitud) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comentario') ?></th>
            <td><?= h($movrequerimiento->comentario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusrequerimiento') ?></th>
            <td><?= $movrequerimiento->has('statusrequerimiento') ? $this->Html->link($movrequerimiento->statusrequerimiento->statusrequerimiento_id, ['controller' => 'Statusrequerimiento', 'action' => 'view', $movrequerimiento->statusrequerimiento->statusrequerimiento_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recibido') ?></th>
            <td><?= $movrequerimiento->has('recibido') ? $this->Html->link($movrequerimiento->recibido->recibido_id, ['controller' => 'Recibido', 'action' => 'view', $movrequerimiento->recibido->recibido_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $this->Html->link($movrequerimiento->users_user_id1, ['controller' => 'Users', 'action' => 'view', $movrequerimiento->users_user_id1]) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Users User Id1') ?></th>
            <td><?= h($movrequerimiento->users_user_id2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fech Req') ?></th>
            <td><?= h($movrequerimiento->fech_req) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fech Entrega') ?></th>
            <td><?= h($movrequerimiento->fech_entrega) ?></td>
        </tr>
    </table>
</div>
