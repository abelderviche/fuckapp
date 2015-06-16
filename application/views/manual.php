<div class="container">
  <div class="row">
   <form id="form" method="POST" action="/manual_post">
    <div  class="col s12">
      <h1 id="h1-ingreso" style="margin:0px;">INGRESO MANUAL</h1>
      <hr class="col s4 offset-s4 negro">
      <textarea  name="problema" id="problema" class="col s12 m10 offset-m1" name=""  style="margin-top:10px;" value="PUTEA AQUÍ">
      </textarea>
     <button  class="siguiente col s6 offset-s3 " type="submit" name="finalizar" href="#">SIGUIENTE</button>
    <div id="pasos" class="col s12 m10 offset-m2">
         <img class="responsive-img" src="<?php echo asset_url(); ?>/img/paso-2.png" alt="">
    </div>
    </div>
  </form>
  </div>
</div>








<!--
    
<div style="border:1px solid #290728;margin-top:3px;text-align:center;">
  <div style="font-weight:bolder;font-size:15px;border-bottom:2px solid #300830;background-color:#290728;color:white; ">Carga Manual</div>
    <div class="col-sm-12">
      <form id="form" method="POST" action="/manual_post">
        <input type="hidden" name="manual" value="1">
        
        <div class="form-group">
          <label for="problema">Ingrese su puteada:</label>
          <textarea class="form-control" rows="5" name="problema" id="problema"></textarea>
        </div>
        <button class="btn btn-primary" type="submit" name="finalizar" href="#"><i class="fa fa-paper-plane fa-fw"></i> Finalizar</button>
      </form>
    </div>  
  </div>
</div>
-->