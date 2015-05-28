<?php 
$tipos_empresa = get_tipo_empresa();
?>
<div class="row">
  <div class="col s12 m6 offset-m3">
    <h2 class="deep-purple-text accent-1">Tipos de Empresa</h2>
    <div class="divider" style="margin-bottom:20px;"></div>
  </div>
</div>
<div class="row">
  <div class="col s12 m6 offset-m3">
      <ul class="collection">
      <?php foreach ($empresas as $em) : ?>
        <a href="#" data-id-tipo-empresa="<?=$em["id_tipo_empresa"]?>" class="collection-item black-text darken-4 eliminar_empresa"><?=$em["tipo_empresa"]?> <i class="small grey-text darken-4 mdi-navigation-close right"></i></li>
      <?php endforeach; ?>
      </ul>  
  </div>
</div>  
  
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large deep-purple darken-1 modal-trigger" href="#modal2">
      <i class="large mdi-content-add"></i>
    </a>
</div>
<!-- modal agregar -->
<div id="modal2" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Agregar Tipo de Empresa</h4>
    <div class="divider" style="margin-bottom:20px;"></div>
        <div class="input-field col s12">
          <i class="mdi-action-store prefix"></i>
          <input id="nombre_tipo_empresa" name="nombre_tipo_empresa" type="text" class="validate">
          <label for="nombre_tipo_empresa">Tipo de Empresa</label>
        </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action-done waves-effect waves-purple btn-flat"><i class="large mdi-action-done right"></i> DONE </a>
  </div>
</div>

