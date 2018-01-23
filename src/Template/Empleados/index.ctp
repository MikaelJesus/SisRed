<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empleado[]|\Cake\Collection\CollectionInterface $empleados
 */
?>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">Menu</li>
            <li><?= $this->Html->link(__('Alta de Empleado'), ['action' => 'add']) ?></li>
            <li onclick="buscador()"><a href="#">Buscar Empleado</a></li>
            <li><?= $this->Html->link(__('Reportes'), ['action' => 'vistapdf']) ?></li>
            <!-- <li><?= $this->element('menu')?></li> -->

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
        <h1><?= __('Empleados') ?></h1>


<div id="buscar" style="display: none;">
    <h1><?= __('Buscador') ?></h1>
<?php
   echo $this->Form->create(null, ['valueSources' => 'query']);
    // You'll need to populate $authors in the template from your controller
    echo $this->Form->input('nombre');
    // Match the search param in your table configuration
    echo $this->Form->input('nue');
    echo $this->Form->button('Buscar', ['type' => 'submit']);
    echo $this->Html->link('Reiniciar', ['action' => 'index']);
    echo $this->Form->end();
?>
</div>

        <table class="table table-striped table-hover ">
         <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('empleado_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('curp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nup') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nue') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rfc') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('apellidop') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidom') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('categorias_categoria_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dependencias_dependencia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('areas_area_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidades_unidad_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departamentos_departamento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_gafete') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('carreras_carrera_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusprofecional_statusprofecional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contrataciones_contratacion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('domicilio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono_local') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono_celular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('privilegiosinternet_privilegio_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoriatelefono_categoriatelefono_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clave_imss') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_emergencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidop_emergencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidom_emergencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel_emergencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_sangre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alergias') ?></th> -->
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $empleado): ?>
            <tr>
                <td><?= h($empleado->curp) ?></td>
                <td><?= h($empleado->nup) ?></td>
                <td><?= h($empleado->nue) ?></td>
                <td><?= h($empleado->nombre." ".$empleado->apellidop." ".$empleado->apellidom) ?></td>
                <td><?= h($empleado->rfc) ?></td>
                <!-- <td><?= $empleado->has('empleado') ? $this->Html->link($empleado->empleado->empleado_id, ['controller' => 'Empleados', 'action' => 'view', $empleado->empleado->empleado_id]) : '' ?></td> -->
                <!-- <td><?= h($empleado->apellidop) ?></td>
                <td><?= h($empleado->apellidom) ?></td> -->
                <!-- <td><?= $empleado->has('categoria') ? $this->Html->link($empleado->categoria->categoria_id, ['controller' => 'Categorias', 'action' => 'view', $empleado->categoria->categoria_id]) : '' ?></td>
                <td><?= $empleado->has('dependencia') ? $this->Html->link($empleado->dependencia->dependencia_id, ['controller' => 'Dependencias', 'action' => 'view', $empleado->dependencia->dependencia_id]) : '' ?></td>
                <td><?= $empleado->has('area') ? $this->Html->link($empleado->area->area_id, ['controller' => 'Areas', 'action' => 'view', $empleado->area->area_id]) : '' ?></td>
                <td><?= $empleado->has('unidade') ? $this->Html->link($empleado->unidade->unidad_id, ['controller' => 'Unidades', 'action' => 'view', $empleado->unidade->unidad_id]) : '' ?></td>
                <td><?= $empleado->has('departamento') ? $this->Html->link($empleado->departamento->departamento_id, ['controller' => 'Departamentos', 'action' => 'view', $empleado->departamento->departamento_id]) : '' ?></td>
                <td><?= h($empleado->fecha_gafete) ?></td>
                <td><?= h($empleado->sexo) ?></td>
                <td><?= $empleado->has('carrera') ? $this->Html->link($empleado->carrera->carrera_id, ['controller' => 'Carreras', 'action' => 'view', $empleado->carrera->carrera_id]) : '' ?></td>
                <td><?= $empleado->has('statusprofecional') ? $this->Html->link($empleado->statusprofecional->statusprofecional_id, ['controller' => 'Statusprofecional', 'action' => 'view', $empleado->statusprofecional->statusprofecional_id]) : '' ?></td>
                <td><?= $empleado->has('contratacione') ? $this->Html->link($empleado->contratacione->contratacion_id, ['controller' => 'Contrataciones', 'action' => 'view', $empleado->contratacione->contratacion_id]) : '' ?></td>
                <td><?= $empleado->has('status') ? $this->Html->link($empleado->status->status_id, ['controller' => 'Status', 'action' => 'view', $empleado->status->status_id]) : '' ?></td>
                <td><?= h($empleado->domicilio) ?></td>
                <td><?= h($empleado->telefono_local) ?></td>
                <td><?= h($empleado->telefono_celular) ?></td>
                <td><?= h($empleado->foto) ?></td>
                <td><?= h($empleado->email) ?></td>
                <td><?= $empleado->has('privilegiosinternet') ? $this->Html->link($empleado->privilegiosinternet->privilegio_id, ['controller' => 'Privilegiosinternet', 'action' => 'view', $empleado->privilegiosinternet->nivel_id]) : '' ?></td>
                <td><?= $empleado->has('categoriatelefono') ? $this->Html->link($empleado->categoriatelefono->categoriatelefono_id, ['controller' => 'Categoriatelefono', 'action' => 'view', $empleado->categoriatelefono->categoriatelefono_id]) : '' ?></td>
                <td><?= h($empleado->observaciones) ?></td>
                <td><?= $this->Number->format($empleado->clave_imss) ?></td>
                <td><?= h($empleado->nombre_emergencia) ?></td>
                <td><?= h($empleado->apellidop_emergencia) ?></td>
                <td><?= h($empleado->apellidom_emergencia) ?></td>
                <td><?= h($empleado->tel_emergencia) ?></td>
                <td><?= h($empleado->tipo_sangre) ?></td>
                <td><?= h($empleado->alergias) ?></td> -->
                  <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $empleado->empleado_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $empleado->empleado_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $empleado->empleado_id], ['confirm' => __('¿Esta seguro que desea eliminar este registro?')]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
        </tbody>
    </table> 
    <div class="text-center">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, Mostrando {{current}} columna(s) de {{count}} en total')]) ?></p>
    </div>
</div>



<script>
function buscador() {
    var x = document.getElementById("buscar");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>