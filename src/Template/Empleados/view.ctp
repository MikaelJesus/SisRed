<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleado $empleado
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Editar Empleado'), ['action' => 'edit',$empleado->empleado_id]) ?></li>
            <li><?= $this->Form->postLink(
                __('Eliminar Empleado'),
                ['action' => 'delete', $empleado->empleado_id],
                ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]
            )
            ?></li>
            <li><?= $this->Html->link(__('Nuevo Empleado'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Lista de Empleados'), ['action' => 'index']) ?></li>
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
        <h1><?= __('Empleado') ?></h1>

        
        <div class="panel panel-success">
          <div class="panel-heading">
            <h2><?= h($empleado->nombre." ".$empleado->apellidop." ".$empleado->apellidom) ?></h2>
        </div>
        <div class="panel-body">
            <table class="vertical-table">
        <!-- <tr>
            <th scope="row"><?= __('Empleado') ?></th>
            <td><?= $empleado->has('empleado') ? $this->Html->link($empleado->empleado->empleado_id, ['controller' => 'Empleados', 'action' => 'view', $empleado->empleado->empleado_id]) : '' ?></td>
        </tr> -->
        <div class="panel-body">
            <?= $this->Html->image('../files/empleados/foto/' . $empleado->get('fotodir') . '/square_' . $empleado->get('foto')); ?>
        </div>
        
        <tr>
            <th scope="row"><?= __('Nue') ?></th>
            <td><?= h($empleado->nue) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nup') ?></th>
            <td><?= h($empleado->nup) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($empleado->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidop') ?></th>
            <td><?= h($empleado->apellidop) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidom') ?></th>
            <td><?= h($empleado->apellidom) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Curp') ?></th>
            <td><?= h($empleado->curp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rfc') ?></th>
            <td><?= h($empleado->rfc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $empleado->has('categoria') ? $this->Html->link($empleado->categoria->des_categoria, ['controller' => 'Categorias', 'action' => 'view', $empleado->categoria->categoria_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dependencia') ?></th>
            <td><?= $empleado->has('dependencia') ? $this->Html->link($empleado->dependencia->des_dependencia, ['controller' => 'Dependencias', 'action' => 'view', $empleado->dependencia->dependencia_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Area') ?></th>
            <td><?= $empleado->has('area') ? $this->Html->link($empleado->area->des_area, ['controller' => 'Areas', 'action' => 'view', $empleado->area->area_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidade') ?></th>
            <td><?= $empleado->has('unidade') ? $this->Html->link($empleado->unidade->des_unidad, ['controller' => 'Unidades', 'action' => 'view', $empleado->unidade->unidad_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= $empleado->has('departamento') ? $this->Html->link($empleado->departamento->des_departamento, ['controller' => 'Departamentos', 'action' => 'view', $empleado->departamento->departamento_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($empleado->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carrera') ?></th>
            <td><?= $empleado->has('carrera') ? $this->Html->link($empleado->carrera->des_carrera, ['controller' => 'Carreras', 'action' => 'view', $empleado->carrera->carrera_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusprofecional') ?></th>
            <td><?= $empleado->has('statusprofecional') ? $this->Html->link($empleado->statusprofecional->des_statusprofecional, ['controller' => 'Statusprofecional', 'action' => 'view', $empleado->statusprofecional->statusprofecional_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contratacione') ?></th>
            <td><?= $empleado->has('contratacione') ? $this->Html->link($empleado->contratacione->des_contratacion, ['controller' => 'Contrataciones', 'action' => 'view', $empleado->contratacione->contratacion_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Domicilio') ?></th>
            <td><?= h($empleado->domicilio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono Local') ?></th>
            <td><?= h($empleado->telefono_local) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono Celular') ?></th>
            <td><?= h($empleado->telefono_celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($empleado->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Privilegiosinternet') ?></th>
            <td><?= $empleado->has('privilegiosinternet') ? $this->Html->link($empleado->privilegiosinternet->privilegio_id, ['controller' => 'Privilegiosinternet', 'action' => 'view', $empleado->privilegiosinternet->privilegio_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoriatelefono') ?></th>
            <td><?= $empleado->has('categoriatelefono') ? $this->Html->link($empleado->categoriatelefono->des_categoriatelefono, ['controller' => 'Categoriatelefono', 'action' => 'view', $empleado->categoriatelefono->categoriatelefono_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($empleado->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Emergencia') ?></th>
            <td><?= h($empleado->nombre_emergencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidop Emergencia') ?></th>
            <td><?= h($empleado->apellidop_emergencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidom Emergencia') ?></th>
            <td><?= h($empleado->apellidom_emergencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel Emergencia') ?></th>
            <td><?= h($empleado->tel_emergencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Sangre') ?></th>
            <td><?= h($empleado->tipo_sangre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alergias') ?></th>
            <td><?= h($empleado->alergias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clave Imss') ?></th>
            <td><?= $this->Number->format($empleado->clave_imss) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Gafete') ?></th>
            <td><?= h($empleado->fecha_gafete) ?></td>
        </tr>
    </table>
        </div>
    </div>
</div>