<h2><a href="#" id="ver_login">Ingreso</a> / <a href="#" class="activo" id="ver_registro">Registro</a></h2>
<?php 	if ($this->input->get("respuesta")) {
             $respuesta = $this->input->get("respuesta");
            if ($respuesta === "credenciales") { ?>
               <div class="alert alert-danger" role="alert"><strong>Error! </strong> El usuario o la contrase&ntilde;a no son v&aacute;lidos.</div>
             <?php }
        }     ?>


<div id="modulo_login" class="col-sm-12">
<form method="POST" name="usuario_login" action="/usuario_login">
	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
	  <input type="email" class="form-control" name="email" id="email" placeholder="email" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
	  <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="Password" aria-describedby="basic-addon1">
	</div>
	<div class="btn-group open">
	  <button class="btn btn-primary" type="submit" name="entrar" href="#"><i class="fa fa-paper-plane fa-fw"></i> Entrar</button>
	</div>	
</form>	
</div>

<div id="modulo_registro" class="col-sm-12">
<form method="POST" name="usuario_registro" action="/usuario_registro">
	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
	  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
	  <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" aria-describedby="basic-addon1">
	</div>	
	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
	  <input type="email" class="form-control" name="email" id="email" placeholder="email" aria-describedby="basic-addon1">
	</div>	
	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
	  <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="Password" aria-describedby="basic-addon1">
	</div>
	<div class="btn-group open">
	  <button class="btn btn-primary" type="submit" name="registro" href="#"><i class="fa fa-paper-plane fa-fw"></i> Registrarse</button>
	</div>
</form>	
</div>
		<div id="pasos">
			<figure><img src="<?php echo asset_url(); ?>img/paso-1.png" alt=""></figure>
		</div>