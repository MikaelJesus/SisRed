<!-- <div id="wrapper"> -->
       <!--  <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">Menu</li>
                <?php if ($Auth->user('role_role_id')==3): ?>
                <li><?= $this->Html->link(__('Nuevo Requerimiento'), ['controller'=>'movrequerimientos','action' => 'add']) ?></li>
                <?php endif ?>
                <li><?= $this->element('menu')?></li>
                <li><a href="/SisRed/main/logout">Salir</a></li>
            </ul>
        </div>
 -->



        <!-- <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div> -->



<!-- <h1>HOLA MUNDO</h1> -->



    <div class="container" style="background-color:#fff;">
        <div class="row">
            <div class="col-md-12 bar no-mb color-white" style="padding: 20px 15px;">
                <?= $this->Flash->render() ?>
            </div>

            <div class="col-md-6 col-md-offset-3" style="margin-top:40px;margin-bottom:40px;">
                <div class="panel panel-success">

                    <div class="panel-heading">
                        <h2>Menu de Pdf</h2>
                    </div>

                    <div class="panel-body">

                        <!-- <p class="text-center">
                            <a href="/SisRed/Carreras/vistapdf"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Carreras</button></a>
                        </p>

                        <p class="text-center">
                            <a href="/SisRed/Categorias/vistapdf"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Categorias</button></a>
                        </p>

                        <p class="text-center">
                            <a href="/SisRed/CategoriaTelefono/vistapdf"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Categorias de Telefono</button></a>
                        </p>

                        <p class="text-center">
                            <a href="/SisRed/Conmutadores/vistapdf"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Conmutadores</button></a>
                        </p>

                        <p class="text-center">
                            <a href="/SisRed/Empleados/vistapdf"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Empleados</button></a>
                        </p>

                        <p class="text-center">
                            <a href="/SisRed/Impresoras/vistapdf"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Impresoras</button></a>
                        </p>

                        <p class="text-center">
                            <a href="/SisRed/Pcs/vistapdf"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Pcs</button></a>
                        </p>

                        <p class="text-center">
                            <a href="/SisRed/PrivilegiosInternet/vistapdf"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Privilegios de Internet</button></a>
                        </p> -->

                        <p class="text-center">
                            <a href="/SisRed/Empleados"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Control e Impresion de Gafetes</button></a>
                        </p>
                        <p class="text-center">
                            <a href="/SisRed/Movvozydatos"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Servicios de Voz y Datos</button></a>
                        </p>
                        <p class="text-center">
                            <a href="/SisRed/Movrequerimientos"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Requerimiento y/o Apoyo Tecnico</button></a>
                        </p>
                        <p class="text-center">
                            <a href="#"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Boton ese de tablas de la DB</button></a>
                        </p>
                        <p class="text-center">
                            <a href="#"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Cambiar Contraseña</button></a>
                        </p>

                        <p class="text-center">
                            <a href="/SisRed/main/logout"><button class="btn btn-default"><i class="fa fa-sign-in"></i>Salir</button></a>
                        </p>





                </div>
            </div>
        

    </div>
</div>
</div>



    <!-- </div> -->