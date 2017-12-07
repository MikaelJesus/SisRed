<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movrequerimiento $movrequerimiento
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Movrequerimientos'), ['action' => 'index']) ?></li>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<div class="movrequerimientos form large-10 medium-8 columns content">
    <?= $this->Form->create($movrequerimiento) ?>
    <fieldset>
        <legend><?= __('Add Movrequerimiento') ?></legend>
        <?php
            echo $this->Form->control('fech_req');
            echo $this->Form->control('requerimientos_requerimiento_id', ['options' => $requerimientos,'label'=>'Requerimiento']);
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
        ?>
        <?php if ($Auth->user('role_role_id')==3): ?>
        <?php
            echo ('<div hidden=hidden>');
        ?>
        <?php endif ?>
        <?php
            echo $this->Form->control('users_user_id1',['options'=>$users,'value'=>$Auth->user('user_id')]);
        ?>
        <?php if ($Auth->user('role_role_id')==3): ?>
        <?php
            echo ('</div>');
        ?>
        <?php endif ?>
        <?php if ($Auth->user('role_role_id')!=3): ?>
        <?php
            echo $this->Form->control('fech_entrega');
            echo $this->Form->control('comentario');
            echo $this->Form->control('statusrequerimiento_statusrequerimiento_id', ['options' => $statusrequerimiento]);
            echo $this->Form->control('recibido_recibido_id', ['options' => $recibido]);
            echo $this->Form->control('users_user_id2',['options'=>$users]);
        ?>
        <?php endif ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
