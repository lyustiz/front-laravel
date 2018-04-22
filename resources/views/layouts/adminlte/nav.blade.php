<nav class="navbar navbar-static-top" role="navigation">
      
      <!-- Togle Menu Lateral-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <!-- Menu Navegacion Derecha -->
      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
        
            @include('layouts.adminlte.msj', ['data' => 'dataMensajes'])
        
            @include('layouts.adminlte.user', ['usuario' => $usuario])

            <!-- Togle Barra derecha -->
            <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cogs"></i></a>
            </li>

        </ul>
      </div>
    </nav>