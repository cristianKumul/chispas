<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
           @if (!Auth::guest())
               <div class="user-panel">
                    <div class="pull-left image">
                        <img src= "/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                       <div class="pull-left info">

                            <p>{{ Auth::user()->name }}</p>
                            <!-- Status -->
                           <p><i class="fa fa-circle text-success"></i> Online</p>
                        </div>
                </div>
            @endif
        <!-- search form (Optional) -->
       {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"></li>
            <!-- Optionally, you can add icons to the links -->
            {{--<li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Home</span></a></li>--}}
                <li><a href=""><i class='fa fa-users'></i> <span>Administrativo</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('admin.users.index')}}">Index</a></li>
                        <li><a href="/admin">Administración </a></li>
                        <li><a href="/practicante">Practicantes </a></li>
                        <li><a href="/servicioso">Servicio social </a></li>

                    </ul>
                </li>

                <li><a href=""><i class='fa fa-stethoscope'></i> <span>Consultorio</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/usuarios">Usuarios </a></li>
                        <li><a href="/consulta">Consultas </a></li>
                        <li><a href="/anticonceptivo">Anticonceptivos </a></li>
                        <li><a href="/condones">Condones Masculinos</a></li>
                        <li><a href="/busqueda">Búsquedas</a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class='fa fa-shopping-cart'></i> <span>Venta</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/activos">Registro de los activos </a></li>
                        <li><a href="/ventas">Registro de ventas </a></li>
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#"><i class='fa fa-file-text-o'></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/reporconsultorio">Reporte de consultorio </a></li>
                        <li><a href="/reporactivos">Registro de activos </a></li>
                    </ul>
                </li>
         </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
