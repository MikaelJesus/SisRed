<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movrequerimiento $movrequerimiento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $movrequerimiento->movrequerimientos_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $movrequerimiento->movrequerimientos_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Movrequerimientos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Movrequerimientos'), ['controller' => 'Movrequerimientos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movrequerimiento'), ['controller' => 'Movrequerimientos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Requerimientos'), ['controller' => 'Requerimientos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Requerimiento'), ['controller' => 'Requerimientos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusrequerimiento'), ['controller' => 'Statusrequerimiento', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusrequerimiento'), ['controller' => 'Statusrequerimiento', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recibido'), ['controller' => 'Recibido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recibido'), ['controller' => 'Recibido', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="movrequerimientos form large-9 medium-8 columns content">
    <?= $this->Form->create($movrequerimiento) ?>
    <fieldset>
        <legend><?= __('Edit Movrequerimiento') ?></legend>
        <?php
            echo $this->Form->control('fech_req');
            echo $this->Form->control('requerimientos_requerimiento_id', ['options' => $requerimientos]);
            echo $this->Form->control('peticion');
            echo $this->Form->control('cpu');
            echo $this->Form->control('monitor');
            echo $this->Form->control('teclado');
            echo $this->Form->control('mouse');
            echo $this->Form->control('impresora');
            echo $this->Form->control('corriente_pc');
            echo $this->Form->control('corriente_impresora');
            echo $this->Form->control('usb_impresora');
            echo $this->Form->control('otro');
            echo $this->Form->control('solicitud');
            echo $this->Form->control('fech_entrega', ['empty' => true]);
            echo $this->Form->control('comentario');
            echo $this->Form->control('statusrequerimiento_statusrequerimiento_id', ['options' => $statusrequerimiento]);
            echo $this->Form->control('recibido_recibido_id', ['options' => $recibido]);
            echo $this->Form->control('users_user_id1');
            echo $this->Form->control('users_user_id2', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
