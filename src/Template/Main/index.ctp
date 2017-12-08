<div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">Menu</li>
                <?php if ($Auth->user('role_role_id')==3): ?>
                <li><?= $this->Html->link(__('Nuevo Requerimiento'), ['controller'=>'movrequerimientos','action' => 'add']) ?></li>
                <?php endif ?>
                <li><?= $this->element('menu')?></li>
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
</div>


<!-- <h1>HOLA MUNDO</h1> -->







    