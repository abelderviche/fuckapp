<?php if($carta_final){ ?>
<div style="border:1px solid #290728;margin-top:3px;text-align:center;">
	<div style="font-weight:bolder;font-size:15px;border-bottom:2px solid #300830;background-color:#290728;color:white;	">Carta Documento</div>
	<div style="font-size:15px;margin-top:2px"><?=$carta_final;?></div>
</div>
<?php }else{ ?>
<div style="border:1px solid #290728;margin-top:3px;text-align:center;">
  <div style="font-weight:bolder;font-size:15px;border-bottom:2px solid #300830;background-color:#290728;color:white; ">Error!</div>
  <div style="font-size:15px;margin-top:2px">No se ha detectado una empresa en la base de datos<br>
      <a href="manual.php" id="ingresar"><h2>INGRESAR MANUALMENTE</h2></a>
  </div>
</div>
<?php } ?>
<div id="pasos">
<figure><img src="<?php echo asset_url(); ?>img/paso-1.png" alt=""></figure>
</div>