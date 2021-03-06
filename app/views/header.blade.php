
<head>


    <meta charset="UTF-8">
    <title>Corte´x | Panel de Control</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>



    <!-- Bootstrap 3.3.4 -->
    {{HTML::style('bootstrap/css/bootstrap.min.css')}}

    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    {{HTML::style("dist/css/AdminLTE.css" )}}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {{HTML::style('dist/css/skins/_all-skins.css')}}
    <!-- iCheck -->
    {{HTML::style('plugins/iCheck/flat/blue.css')}}


    <link rel="shortcut icon" href="{{URL::asset('favicon.ico') }}">

    <!-- Morris chart -->
    {{HTML::style('plugins/morris/morris.css')}}
    <!-- jvectormap -->
    {{HTML::style('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}
    <!-- Date Picker -->
    {{HTML::style('plugins/datepicker/datepicker3.css')}}
    <!-- Daterange picker -->
    {{HTML::style('plugins/daterangepicker/daterangepicker-bs3.css')}}
    <!-- bootstrap wysihtml5 - text editor -->
    {{HTML::style('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}
    <!-- Calendar -->
    {{HTML::style('plugins/fullcalendar/fullcalendar.min.css')}}
    <!--<link href="plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />-->
    <!-- File Input -->
    {{HTML::style('dist/css/fileinput.css')}}
    <!-- DATA TABLES -->



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{HTML::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}
    {{HTML::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}

    <![endif]-->

    {{HTML::script('js/plugins.js')}}
    {{HTML::script('js/jquery.js')}}

    {{HTML::script('js/jquery-scrolltofixed.js')}}
    {{HTML::script('js/noty/packaged/jquery.noty.packaged.js')}}

    <script type="text/javascript">
        function notificar(texto) {
            var n = noty({
                text: texto,
                theme: 'relax',
                type: 'information',
                layout: 'topCenter',
                timeout: 6000
            });
        }
        function notificarError(texto) {
            var n = noty({
                text: texto,
                type: 'error',
                theme: 'relax',
                layout: 'topCenter',
                timeout: 6000
            });
        }


    </script>

</head>





<body class="skin-red-light sidebar-mini"style="padding-top: 10px;background-color:#C02942">

@if(Session::get('mensaje'))
    <script type="text/javascript">
        var variablejs = "<?= Session::get('mensaje') ?>" ;
        notificar(variablejs);
    </script>
@endif
@if($errors->has('mensaje'))
    @foreach($errors->get('mensaje') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif

@if($errors->has('email'))
    @foreach($errors->get('email') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('username'))
    @foreach($errors->get('username') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('nombre'))
    @foreach($errors->get('nombre') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('apellidos'))
    @foreach($errors->get('apellidos') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('telefono'))
    @foreach($errors->get('telefono') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('email'))
    @foreach($errors->get('email') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('password'))
    @foreach($errors->get('password') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('comentario'))
    @foreach($errors->get('comentario') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('precio'))
    @foreach($errors->get('precio') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('descuento'))
    @foreach($errors->get('descuento') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('porcentaje'))
    @foreach($errors->get('porcentaje') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('diaCompleto'))
    @foreach($errors->get('diaCompleto') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('fecha'))
    @foreach($errors->get('fecha') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('hora'))
    @foreach($errors->get('hora') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('horaInicio'))
    @foreach($errors->get('horaInicio') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('horaFin'))
    @foreach($errors->get('horaFin') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif

@if($errors->has('color'))
    @foreach($errors->get('color') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('aceptada'))
    @foreach($errors->get('aceptada') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('iva'))
    @foreach($errors->get('iva') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('descripcion'))
    @foreach($errors->get('descripcion') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('horaInicio'))
    @foreach($errors->get('horaInicio') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('cantidadActual'))
    @foreach($errors->get('cantidadActual') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('cantidadMinima'))
    @foreach($errors->get('cantidadMinima') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
@if($errors->has('imagen'))
    @foreach($errors->get('imagen') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
    @endforeach
@endif
    <div class="wrapper" >

        <header class="main-header" >
            <!-- Logo -->
            <a href="{{URL::asset('inicio')}}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="{{URL::asset('dist/img/logo-mini.png')}}" /><br><h5>Inicio</h5></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="{{URL::asset('dist/img/logo-lg.png')}}" /><br><h5>Ir al Inicio</h5></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">

                                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <a href="{{URL::asset('logout')}}" class="btn btn-block btn-primary btn-xs btn-menu">Cerrar Sesión</a>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="image" style="width: 50%; margin-left: 25%; margin-right: 25%;">

                        @if(Imagen::find(Auth::getUser()->idImagen)!=null)
                        <img src="{{URL::asset('img/perfil/'.Imagen::find(Auth::getUser()->idImagen)->nombre)}}" class="img-circle" alt="User Image" />
                        @else
                            <img src="{{URL::asset('img/perfil/default.jpg')}}" class="img-circle" alt="User Image" />
                        @endif
                    </div>

                        <p style="color: #C02942;text-align: center;">{{Auth::getUser()->username}}</p>

                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MENÚ PRINCIPAL</li>

                    @if(Cliente::esCliente())
                        <li>
                            <a href="{{URL::asset('cliente/perfil')}}">
                                <i class="fa fa-user"></i> <span>Mi Perfil</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{URL::asset('cliente/calendario')}}">
                                <i class="fa fa-calendar"></i> <span>Coger Cita</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{URL::asset('cliente/citas')}}">
                                <i class="fa fa-calendar-o"></i><span> Mis Citas</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{URL::asset('cliente/servicios')}}">
                                <i class="fa fa-scissors"></i> <span>Servicios</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{URL::asset('cliente/ofertas')}}">
                                <i class="fa fa-certificate"></i> <span>Ofertas</span>
                            </a>
                        </li>


                        <li>
                            <a href="{{URL::asset('cliente/productos')}}">
                                <i class="fa fa-tag"></i><span>Productos</span>
                            </a>
                        </li>
                    @else
                    <li>
                        <a href="{{URL::asset('administrador/perfil')}}">
                            <i class="fa fa-user"></i> <span>Mi Perfil</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-cubes"></i> <span>Productos</span><i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL::asset('administrador/disponibles')}}"><i class="fa fa-circle-o text-green"></i> Disponibles</a>
                            </li>
                            <li><a href="{{URL::asset('administrador/pendientes')}}"><i class="fa fa-circle-o text-red"></i> Pendientes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{URL::asset('administrador/calendario')}}">
                            <i class="fa fa-calendar"></i> <span>Calendario</span>
                        </a>
                    </li>

                        <li>
                            <a href="{{URL::asset('administrador/citas')}}">
                                <i class="fa fa-calendar-o"></i> <span>Citas</span>
                            </a>
                        </li>
                    <li>
                        <a href="{{URL::asset('administrador/servicios')}}">
                            <i class="fa fa-scissors"></i> <span>Servicios</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::asset('administrador/ofertas')}}">
                            <i class="fa fa-certificate"></i> <span>Ofertas</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::asset('administrador/clientes')}}">
                            <i class="fa fa-users"></i> <span>Clientes</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::asset('administrador/galeria')}}">
                            <i class="fa fa-picture-o"></i> <span>Modificar Galería</span>
                        </a>
                    </li>

                        @endif
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>