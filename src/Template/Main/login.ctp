<div id="contenido" style="background-color:#eee;margin-top: 100px;">
	<div class="container" style="background-color:#fff;">
		<div class="row">
			<div class="col-md-12 bar no-mb color-white" style="padding: 20px 15px;">
				<h3 style="margin: 0;">Inicio de Sesion</h3>
				<?= $this->Flash->render() ?>
			</div>

			<div class="col-md-6 col-md-offset-3" style="margin-top:40px;margin-bottom:40px;">
				<div class="panel panel-success">

					<div class="panel-heading">
						<h2>Entrar</h2>
					</div>

					<div class="panel-body">
						<?= $this->Form->create() ?>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Usuario" name="username">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Contraseña" name="password">
						</div>

						<p class="text-center">
							<button class="btn btn-default"><i class="fa fa-sign-in"></i> Continuar</button>
						</p>
					<?= $this->Form->end() ?>
				</div>
			</div>
		</div>

	</div>
</div>
</div>
</div>



<!-- <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong><?= $this->Flash->render() ?></strong>
</div> -->


<!-- <form class="form-horizontal">
  <fieldset>
    <legend>Inicio de Sesion</legend>
    <div class="form-group">
      <label for="username" class="col-lg-2 control-label">Usuario</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="username" placeholder="Usuario">
      </div>
    </div>
    <div class="form-group">
      <label for="password" class="col-lg-2 control-label">Contraseña</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="password" placeholder="Contraseña">
      </div>
    </div>
    
  </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div> -->