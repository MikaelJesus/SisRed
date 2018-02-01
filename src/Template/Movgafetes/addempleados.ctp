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
      <!-- <li><?= $this->Html->link(__('Nuevo Empleado'), ['action' => 'add']) ?></li> -->
      <li><?= $this->Html->link(__('Lista de Empleados'), ['action' => 'indexempleados']) ?></li>
      <li><a href="/SisRed/main/logout">Salir</a></li>
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
          <?= $this->Form->create($empleado,['type'=>'file','class'=>'form-horizontal'],$movgafete) ?>
          <fieldset>
            <legend><h1><?= __('Agregar Empleado') ?></h1></legend>
            <div class="form-group">
              <label for="nue" class="col-lg-2 control-label">NUE</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="nue" id="nue" required="required" placeholder="NUE">
              </div>
            </div>
            <div class="form-group">
              <label for="nup" class="col-lg-2 control-label">NUP</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="nup" id="nup" required="required" placeholder="Descripcion">
              </div>
            </div>

            <div class="form-group">
              <label for="nombre" class="col-lg-2 control-label">Nombre(s)</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="nombre" id="nombre" required="required" placeholder="Descripcion">
              </div>
            </div>

            <div class="form-group">
              <label for="apellidop" class="col-lg-2 control-label">Apellido Peterno</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="apellidop" id="apellidop" required="required" placeholder="Descripcion">
              </div>
            </div>

            <div class="form-group">
              <label for="apellidom" class="col-lg-2 control-label">Apellido Materno</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="apellidom" id="apellidom" required="required" placeholder="Descripcion">
              </div>
            </div>

            <div class="form-group">
              <label for="curp" class="col-lg-2 control-label">Curp</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="curp" id="curp" required="required" placeholder="Descripcion">
              </div>
            </div>

            <div class="form-group">
              <label for="rfc" class="col-lg-2 control-label">Rfc</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="rfc" id="rfc" required="required" placeholder="Descripcion">
              </div>
            </div>

            <div class="form-group">
              <label for="categorias_categoria_id" class="col-lg-2 control-label">Categoria</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('categorias_categoria_id', ['label'=>false,'options' => $categorias,'class'=>'form-control']);?>
              </div>
            </div>

            <div class="form-group">
              <label for="dependencias_dependencia_id" class="col-lg-2 control-label">Dependencia</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('dependencias_dependencia_id', ['label'=>false,'options' => $dependencias,'class'=>'form-control']);?>
              </div>
            </div>

            <div class="form-group">
              <label for="areas_area_id" class="col-lg-2 control-label">Area</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('areas_area_id', ['label'=>false,'options' => $areas,'class'=>'form-control']);?>
              </div>
            </div>

            <div class="form-group">
              <label for="unidades_unidad_id" class="col-lg-2 control-label">Unidad</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('unidades_unidad_id', ['label'=>false,'options' => $unidades,'class'=>'form-control']);?>
              </div>
            </div>

            <div class="form-group">
              <label for="departamentos_departamento_id" class="col-lg-2 control-label">Departamento</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('departamentos_departamento_id', ['label'=>false,'options' => $departamentos,'class'=>'form-control']);?>
              </div>
            </div>

            <div class="form-group">
              <label for="fecha_gafete" class="col-lg-2 control-label">Fecha Gafete</label>
              <div class="col-lg-10">
                <input type="date" class="form-control" name="fecha_gafete" id="fecha_gafete" required="required">
              </div>
            </div>

            <div class="form-group">
              <label for="sexo" class="col-lg-2 control-label">Sexo</label>
              <div class="col-lg-10">
                <select class="form-control" name="sexo" id="sexo">
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="carreras_carrera_id" class="col-lg-2 control-label">Carrera</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('carreras_carrera_id', ['label'=>false,'options' => $carreras,'class'=>'form-control']);?>
              </div>
            </div>

            <div class="form-group">
              <label for="statusprofecional_statusprofecional_id" class="col-lg-2 control-label">Status Profecional</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('statusprofecional_statusprofecional_id', ['label'=>false,'options' => $statusprofecional,'class'=>'form-control']);?>
              </div>
            </div>

            <div class="form-group">
              <label for="contrataciones_contratacion_id" class="col-lg-2 control-label">Tipo de Contratacion</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('contrataciones_contratacion_id', ['label'=>false,'options' => $contrataciones,'class'=>'form-control']);?>
              </div>
            </div>

            <div class="form-group">
              <label for="domicilio" class="col-lg-2 control-label">Domicilio</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="domicilio" id="domicilio" required="required" placeholder="Domicilio">
              </div>
            </div>

            <div class="form-group">
              <label for="telefono_local" class="col-lg-2 control-label">Telefono Local</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="telefono_local" id="telefono_local" placeholder="Telefono Local">
              </div>
            </div>

            <div class="form-group">
              <label for="telefono_celular" class="col-lg-2 control-label">Telefono Celular</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="telefono_celular" id="telefono_celular" placeholder="Telefono Celular">
              </div>
            </div>

            <div class="form-group">
              <label for="foto" class="col-lg-2 control-label">Foto</label>
              <div class="col-lg-10">
                <?php echo $this->Form->input('foto', ['class'=>'form-control','label'=>false,'type' => 'file']);?>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
              </div>
            </div>

            <!-- <div class="form-group">
              <label for="privilegiosinternet_privilegio_id" class="col-lg-2 control-label">Privilegios de Internet</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('privilegiosinternet_privilegio_id', ['label'=>false,'options' => $privilegiosinternet,'class'=>'form-control','empty'=>true]);?>
              </div>
            </div>

            <div class="form-group">
              <label for="categoriatelefono_categoriatelefono_id" class="col-lg-2 control-label">Categoria de Telefono</label>
              <div class="col-lg-10">
                <?php echo $this->Form->control('categoriatelefono_categoriatelefono_id', ['label'=>false,'options' => $categoriatelefono,'class'=>'form-control','empty'=>true]);?>
              </div>
            </div> -->

            <div class="form-group">
              <label for="observaciones" class="col-lg-2 control-label">Observaciones</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="observaciones" id="observaciones" placeholder="Observaciones">
              </div>
            </div>

            <legend><h1><?= __('Datos de Contacto de Emergencia') ?></h1></legend>

            <div class="form-group">
              <label for="clave_imss" class="col-lg-2 control-label">Clave IMSS</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="clave_imss" id="clave_imss" required="required" placeholder="Clave IMSS">
              </div>
            </div>

            <div class="form-group">
              <label for="nombre_emergencia" class="col-lg-2 control-label">Nombre(s)</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="nombre_emergencia" id="nombre_emergencia" required="required" placeholder="Descripcion">
              </div>
            </div>

            <div class="form-group">
              <label for="apellidop_emergencia" class="col-lg-2 control-label">Apellido Paterno</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="apellidop_emergencia" id="apellidop_emergencia" required="required" placeholder="Descripcion">
              </div>
            </div>

            <div class="form-group">
              <label for="apellidom_emergencia" class="col-lg-2 control-label">Apellido Materno</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="apellidom_emergencia" id="apellidom_emergencia" required="required" placeholder="Descripcion">
              </div>
            </div>

            <div class="form-group">
              <label for="tel_emergencia" class="col-lg-2 control-label">Telefono</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="tel_emergencia" id="tel_emergencia" required="required" placeholder="Descripcion">
              </div>
            </div>

            <div class="form-group">
              <label for="tipo_sangre" class="col-lg-2 control-label">Tipo Sanguineo</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="tipo_sangre" id="tipo_sangre" required="required" placeholder="Descripcion">
              </div>
            </div>

            <div class="form-group">
              <label for="alergias" class="col-lg-2 control-label">Alergias</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="alergias" id="alergias" placeholder="Descripcion">
              </div>
            </div>




            <!-- <?= $this->Form->create($movgafete,['class'=>'form-horizontal']) ?> -->
            <fieldset hidden="hidden">
              <div class="form-group">
                <label for="tipo_movimiento" class="col-lg-2 control-label">Tipo de Movimiento</label>
                <div class="col-lg-10">
                  <?php echo $this->Form->control('tipo_movimiento',['label'=>false,'class'=>'form-control','value'=>1]);?>
                </div>
              </div>


              <div class="form-group">
              <label for="fecha_movimiento" class="col-lg-2 control-label">Fecha Movimiento</label>
              <div class="col-lg-10">
                <input type="date" class="form-control" name="fecha_movimiento" id="fecha_movimiento" required="required">
              </div>
            </div>



              <div class="form-group">
                <label for="users_user_id" class="col-lg-2 control-label">Usuario</label>
                <div class="col-lg-10">
                  <?php echo $this->Form->control('users_user_id', ['label'=>false,'options' => $users,'class'=>'form-control','value'=>$Auth->user('users_user_id')]);?>
                </div>
              </div>
              <div class="form-group">
                <label for="empleados_empleado_id" class="col-lg-2 control-label">Empleado</label>
                <div class="col-lg-10">
                  <?php echo $this->Form->control('empleados_empleado_id', ['label'=>false,'options' => $empleados,'class'=>'form-control']);?>
                </div>
              </div>

            </fieldset>
            <!-- <?= $this->Form->end() ?> -->
          </div>



          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-default">Agregar</button>
            </div>
          </div>
        </fieldset>
        <?= $this->Form->end() ?>
      </div>



      <script type="text/javascript">
        $(document).ready( function() {
    var now = new Date();
    var month = (now.getMonth() + 1);               
    var day = now.getDate();
    if (month < 10) 
        month = "0" + month;
    if (day < 10) 
        day = "0" + day;
    var today = now.getFullYear() + '-' + month + '-' + day;
    $('#fecha_gafete').val(today);
    $('#fecha_movimiento').val(today);
});
      </script>