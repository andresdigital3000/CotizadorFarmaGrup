<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">            
            <div>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="imagenes/LogoAmfarGlobo.jpg" width="50px" height="50px">
                </a>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    AMERICAN FARMAGROUP - COTIZADOR
                </a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {!!Auth::user()->nombre!!}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href=""><i class="fa fa-users fa-fw"></i> Empleados<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/usuario/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar Empleado</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/usuario')!!}"><i class='fa fa-list-ol fa-fw'></i> Ver Empleados</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href=""> Dependencias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/dependencias/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar Dependencia</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/dependencias')!!}"><i class='fa fa-list-ol fa-fw'></i> Ver Dependencias</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href=""> Perfiles<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level" disabled="true">
                                <li>
                                    <a href="{!!URL::to('/perfiles/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar Perfil</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/perfiles')!!}"><i class='fa fa-list-ol fa-fw'></i> Ver Perfiles</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"> Paginas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/paginas/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar Pagina</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/paginas')!!}"><i class='fa fa-list-ol fa-fw'></i> Ver Paginas</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"> Clientes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/clientes/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar Cliente</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/clientes')!!}"><i class='fa fa-list-ol fa-fw'></i> Ver Clientes</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"> Proveedores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/proveedores/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar Proveedor</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/proveedores')!!}"><i class='fa fa-list-ol fa-fw'></i> Ver Proveedores</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"> Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/productos/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar Producto</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/productos')!!}"><i class='fa fa-list-ol fa-fw'></i> Ver Productos</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"> Cotizaciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/cotizaciones/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar Cotizacion</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/cotizaciones')!!}"><i class='fa fa-list-ol fa-fw'></i> Ver Cotizaciones</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"> Reportes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/reportes/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar Reporte</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/reportes')!!}"><i class='fa fa-list-ol fa-fw'></i> Ver Reportes</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"> Parametros<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar Parametro</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Ver Parametros</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>
    

    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}

</body>

</html>
