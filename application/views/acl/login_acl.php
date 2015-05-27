<?php if (!empty($error)) : ?>
    <script>
    $(document).ready(function($) {
        Materialize.toast('Usuario o Password no v&aacute;lido', 4000); 
        
    });
    </script>
<?php endif; ?>
<div class="row">
<form class="form-signin s12" role="form" action="/acl/acl_login/login" method="POST">
            <h2>Ingrese los datos</h2>
            <div class="divider" style="margin-bottom:20px;"></div>
        <div class="input-field col s12 m6 offset-m2">
            <input type="text" id="usuario" name="usuario" class="validate" placeholder="Usuario" required autofocus>
            <label for="usuario">Usuario: </label>
        </div>
        <div class="input-field col s12 m6 offset-m2">    
            <label for="contrasenia">Contrase&ntilde;a</label>
            <input type="password" id="contrasenia" name="contrasenia" class="validate" placeholder="Password" required>
        </div>    
            <div class="input-field col s12 m6 offset-m2 center-align">
                <button class="btn waves-effect waves-light deep-purple darken-1" name="login" value="1" type="submit">Entrar <i class="mdi-content-send right"></i></button>
            </div> 
        </div>
    </div>
</form>
</div>
