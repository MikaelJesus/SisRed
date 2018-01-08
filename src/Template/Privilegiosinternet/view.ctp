<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Privilegiosinternet $privilegiosinternet
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Privilegio de Internet'), ['action' => 'edit',$privilegiosinternet->privilegio_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Privilegio de Internet'),
                ['action' => 'delete', $privilegiosinternet->privilegio_id],
                ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nuevo Privilegio de Internet'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Privilegios de Internet'), ['action' => 'index']) ?></li>
        </ul>
    </div>
        <!-- <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div> -->
        <h1><?= __('Privilegio de Internet') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2><?= h($privilegiosinternet->privilegio_id) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($privilegiosinternet->nivel) ?>
        </div>
        <div class="panel-body">
            <?= h($privilegiosinternet->des_privilegio) ?>
        </div>
    </div>
</div>