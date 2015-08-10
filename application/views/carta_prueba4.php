<div id="container" class="container" style="background:#e0e0e0;font-size:14px;margin-top:5px;">
  <div class="row" >
    <div class="col s12 " style="text-align:right;font-size:14px;font-weight:bold;"><?=date("d/m/Y")?></div>
    <div class="col s12" style="font-size:14px;font-size:14px;font-weight:bold;">Sres. <?=ucfirst($datos["empresa"]);?> S.A.</div>
      <div class="col s12 " style="text-align:justify;font-size:14px; ">
        En el marco de la relación de consumo que nos une, concurro a efectos de manifestar 
        mi falta de conformidad respecto a las condiciones actuales del servicio prestado.  
        <br><br>
        A la espera de una pronta solución a los inconvenientes ocasionados.  <br>
        <br>
        Saluda atentamente.
      </div>
    <div class="col s12 " style="font-weight:bold;font-size:14px;"><br><?=$datos["nombre"]?> <?=$datos["apellido"]?></div>
  </div>
</div>

  <div class="col s12 center">
      <a href="https://twitter.com/share?url=http://www.puteapp.com/compartir/<?=$id_puteada;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank" title="Compartir en Twitter"><span class="fa fa-twitter circle"></span></a>
     <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.puteapp.com/compartir/<?=$id_puteada?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank" title="Compartir en Facebook"><span class="fa fa-facebook circle"></span></a>
      <meta property="og:title" content="Puteapp" />
      <meta property="og:type" content="article" />
      <meta property="og:image" content="<?php echo asset_url(); ?>/img/logo.png" />
      <meta property="og:description" content="test" />
  </div>
  <style type="text/css">
    .circle{
      border-radius: 50%;
      margin: 0.15em;
      font-size: 3em;
    }
    .fa-twitter{
      background: #4099FF;
      color: #FFFFFF;
      padding: 0.05em 0.07em;
    }
    .fa-facebook{
      background: #3B5998;
      color: #FFFFFF;
      padding: 0.05em 0.3em;
    } 
  </style>