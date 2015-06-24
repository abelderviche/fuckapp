
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fuckapp</title>
        <link rel="stylesheet" href="<?php echo asset_url(); ?>/css/font-awesome.min.css">
         <link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo asset_url(); ?>/css/stylematerialize.css"  media="screen,projection"/>
 
    </head>
    <?php echo print_r($user_profile, TRUE) ?>

    <body class="fondo">

        <div class="row">
            <div class="col s4 m6 center offset-s4  offset-m3">
                <img class="responsive-img" id="start_img" src="<?php echo asset_url(); ?>/img/logo.png" alt="Start">
            </div>
            <h1 id="puteapp">PuteApp</h1>
            <hr class="col s2 offset-s5">
        </div>
            
        <div class="container">
        <div class="row">
            <div class="col s10 m6 offset-m3 offset-s1">
               <a href='<?=$login_url;?>' <button type="" id="login-fb" class="col s12"><i class="fa fa-facebook-official"></i> Login con Facebook</button></a>
                <form method="POST" name="usuario_login" action="/usuario_login">
                    <input type="email" name="email" id="usuario"  placeholder="Email">
                    <input type="password" placeholder="Contraseña" name="contrasenia" id="pass" >
                    <button id="login"  type="submit" name="entrar" type="" class="col s12 ">Login</button>
                </form>
                    <a href='/paso2_registro'><button   type="submit" name="entrar" type="" class="col s12 registro">Registro</button></a>
            </div>
        </div>
        </div>
        <?=$url_test;?>
        <!-- <footer class="page-footer" style="background-color:#3b0a3b">
          <div class="footer-copyright">
            <div class="container center">
            © 2014 Copyright Text
            </div>
          </div>
        </footer> -->

        <script src="<?php echo asset_url(); ?>/js/jquery-2.1.4.min.js" type="text/javascript"></script>
    </body>
</html>







<?php   if ($this->input->get("respuesta")) {
             $respuesta = $this->input->get("respuesta");
            if ($respuesta === "credenciales") { ?>
               <div class="alert alert-danger" role="alert"><strong>Error! </strong> El usuario o la contrase&ntilde;a no son v&aacute;lidos.</div>
             <?php }
        }     ?>

<!--
<h2><a href="#" id="ver_login">Ingreso</a> / <a href="#" class="activo" id="ver_registro">Registro</a></h2>

<div id="modulo_login" class="col-sm-12">
<form method="POST" name="usuario_login" action="/usuario_login">
    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
      <input class="form-control"  type="email" name="email" id="email" placeholder="email" aria-describedby="basic-addon1">
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
        </div> -->