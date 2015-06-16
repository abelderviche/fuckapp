 <div class="container" style="margin-top:10px;">
     
  <div class="row">
    <div class="col s4 m6 center offset-s4  offset-m3">
            <img class="responsive-img" id="start_img" src="<?php echo asset_url(); ?>/img/id-usuario.png" alt="Start">
    </div>

    <div class="cleaner"></div>
    <form method="POST" name="usuario_registro" required action="/usuario_registro" class="col s12 ">
        <input type="text" id="nombre_registro"  required name="nombre" placeholder="nombre" class="col m5 s12">
        <input type="text" id="apellido_registro" name="apellido" placeholder="apellido" class="col m6 s12 offset-m1">
        <input id="email" name="email" type="email" placeholder="email">
        <input id="pass2" name ="contrasenia" type="password" placeholder="password">
        <input id="pass3" name="contrasenia2" required type="password" placeholder="repetir password" >
        <button type="submit" id="submit-listo" required name="registro" class="col s12">LISTO</button>
    </form>
</div>
 </div> 
