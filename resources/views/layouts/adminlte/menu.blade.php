
<ul class="sidebar-menu" data-widget="tree">

<li class="header">Menu</li>


<li class="active">
    <a href="#">
        <i class="fa fa-car"></i> <span>Vehiculos</span>
    </a>
</li>

<li>
    <a href="#">
        <i class="fa fa-id-card"></i> <span>Chofer</span>
    </a>
</li>

<li class="treeview">
    
    <a href="#"><i class="fa fa-hand-point-right"></i> <span>Asignaciones</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>

    <ul class="treeview-menu">
    <li><a href="#">Vehiculo Sedes</a></li>
    <li><a href="#">Chofer Vehiculo</a></li>
    </ul>
</li>

{!! 
        Menu::build($menu, function ($menu, $label, $link) {
                $menu->link($link, $label);
            })
!!}
</ul>
