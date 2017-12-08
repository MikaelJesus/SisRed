	<?php if ($Auth->user('role_role_id')==1): ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administracion<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
                <li class="menu-admin"><?= $this->Html->link(__('Usuarios'), ['controller'=>'Users','action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Roles'), ['controller' => 'Role', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Dependencias'), ['controller' => 'Dependencias', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Areas'), ['controller' => 'Areas', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Unidades'), ['controller' => 'Unidades', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Departamento'), ['controller' => 'Departamentos', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Categoria Telefono'), ['controller' => 'Categoriatelefono', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Contrataciones'), ['controller' => 'Contrataciones', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Privilegios de Internet'), ['controller' => 'Privilegiosinternet', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Recibido (status)'), ['controller' => 'Recibido', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Tipos de Requerimientos'), ['controller' => 'Requerimientos', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Status (empleado)'), ['controller' => 'Status', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Status Profecional'), ['controller' => 'Statusprofecional', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Status de Requerimientos'), ['controller' => 'Statusrequerimiento', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Tipos de Color (Impresoras)'), ['controller' => 'Tipocolor', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Tipo de Conexion'), ['controller' => 'Tipoconexion', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Tipos de Equipo'), ['controller' => 'Tipoequipo', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Tipos de Impresoras'), ['controller' => 'Tipoimpresora', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Tipos de Resguardo'), ['controller' => 'Tiporesguardo', 'action' => 'index']) ?></li>
          </ul>
        </li>
        <?php endif ?>
        <?php if ($Auth->user('role_role_id')==1||$Auth->user('role_role_id')==2): ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gafetes/Voz y Datos<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
                <li class="menu-admin"><?= $this->Html->link(__('Empleados'), ['controller' => 'Empleados', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Carreras'), ['controller' => 'Carreras', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Nivel de carrera'), ['controller' => 'Nivelcarrera', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Lista de Impresoras'), ['controller' => 'Impresoras', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Movimientos de Gafetes'), ['controller' => 'Movgafetes', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Movimientos de Voz y Datos'), ['controller' => 'Movvozydatos', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Lista de Pc'), ['controller' => 'Pcs', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Lista de Switches'), ['controller' => 'Conmutadores', 'action' => 'index']) ?></li>
                <li class="menu-admin"><?= $this->Html->link(__('Lista de Telefonos'), ['controller' => 'Telefonos', 'action' => 'index']) ?></li>
          </ul>
        </li>
        <?php endif ?>
        <li><?= $this->Html->link(__('Movimientos de Requerimientos'), ['controller' => 'Movrequerimientos', 'action' => 'index']) ?></li>