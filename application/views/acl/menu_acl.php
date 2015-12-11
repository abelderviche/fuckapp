<nav class="navbar navbar-default" role="navigation">
    <!-- El logotipo y el icono que despliega el menú se agrupan
         para mostrarlos mejor en los dispositivos móviles -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/acl" ><img src="/assets/acl/img/logo.png" /></a>
    </div>

    <!-- Agrupar los enlaces de navegación, los formularios y cualquier
         otro elemento que se pueda ocultar al minimizar la barra -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li <?php echo ($this->router->fetch_class() === 'acl_permisos' ) ? ' class="active"' : ''; ?>><a href="/acl/acl_permisos/listar">Permisos</a></li>
            <li <?php echo ($this->router->fetch_class() === 'acl_grupos' ) ? ' class="active"' : ''; ?>><a href="/acl/acl_grupos/listar">Grupos</a></li>
            <li <?php echo ($this->router->fetch_class() === 'acl_usuarios' ) ? ' class="active"' : ''; ?>><a href="/acl/acl_usuarios/listar">Usuarios</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="/acl/acl_login/logout">Salir</a></li>
        </ul>
    </div>
</nav>

