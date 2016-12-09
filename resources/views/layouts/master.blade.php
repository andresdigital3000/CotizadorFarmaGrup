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
                <a class="navbar-brand" href="{{ url('/') }}"><img src="/CotizadorFarma/public/imagenes/LogoAmfarGlobo.jpg" width="38px" height="38px" >
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

            <div class="navbar-default sidebar" role="navigation" >
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <?php $temp_menu = 0; ?>
                        @foreach($menus as $menu)
                            @if (($temp_menu != $menu->id) and ($temp_menu !=0)) 
                                </li>
                            @endif
                            @if ($temp_menu != $menu->id)
                                <li>
                                    <a href="#"> {{$menu->nom_menu}}</a>

                                    <ul><a href="<?php echo url($menu->url)?>"> {{$menu->nom_pagina}} </a></ul>
                            @else
                                    <ul><a href="<?php echo url($menu->url)?>"> {{$menu->nom_pagina}} </a></ul>
                            @endif
                            <?php $temp_menu = $menu->id; ?>
                        @endforeach

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
    {!!Html::script('js/buscarModal.js')!!}
</body>

</html>
