<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Area $area
 */
?>
<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Area'), ['action' => 'edit',$area->area_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Area'),
                ['action' => 'delete', $area->area_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $area->area_id)]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nueva Area'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Areas'), ['action' => 'index']) ?></li>
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
        <h1><?= __('Area') ?></h1>


        <div class="panel panel-success">
          <div class="panel-heading">
            <h2> <?= h($area->area_id) ?></h2>
        </div>
        <div class="panel-body">
            <?= h($area->des_area) ?>
        </div>
    </div>

</div>
