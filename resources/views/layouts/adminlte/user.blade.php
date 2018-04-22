<li class="dropdown user user-menu">

    <!-- Usuario Toggle(logo/nombre) -->
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{ url('/assets/adminlte/img/man.png') }}" class="user-image" alt="User Image">
        <span class="hidden-xs"> {{ $usuario }}</span>
    </a>

    <ul class="dropdown-menu">

        <!-- logo/nombre usuario -->
        <li class="user-header">
            <img src="{{ url('/assets/adminlte/img/man.png') }}" class="img-circle" alt="User Image">
            <p> Luis Yustiz <small>Gerencia de Tecnologia</small></p>
        </li>

        <!-- Usuario Body -->
        <li class="user-body">
        <div class="row">
            <div class="col-xs-12 text-center">
            <a href="#">Datos Usuario</a>
            </div>
        </div>
        </li>

        <!-- Usuario Footer-->
        <li class="user-footer">
        <div class="col-xs-12 text-center">
            <a href="#" class="btn btn-default btn-flat">Salir</a>
        </div>
        </li>

    </ul>
</li>