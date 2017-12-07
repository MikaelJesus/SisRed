<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <?php if ($Auth->user('role_role_id')==3): ?>
        <li><?= $this->Html->link(__('Nuevo Requerimiento'), ['controller'=>'movrequerimientos','action' => 'add']) ?></li>
        <?php endif ?>
        <li><?= $this->element('menu')?></li>
    </ul>
</nav>
<h1>HOLA MUNDO</h1>