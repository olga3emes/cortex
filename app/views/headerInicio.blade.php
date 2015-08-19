

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    {{HTML::style('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')}}
    {{HTML::style('http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic')}}
    {{HTML::style('css/bootstrap.css')}}
    {{HTML::style('style.css')}}
    {{HTML::style('css/dark.css')}}
    {{HTML::style('css/font-icons.css')}}
    {{HTML::style('css/animate.css')}}
    {{HTML::style('css/magnific-popup.css')}}
    {{HTML::style('css/calendar.css')}}

    {{HTML::style('css/responsive.css')}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    {{HTML::script('http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js')}}
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    {{HTML::script('js/jquery.js')}}
    {{HTML::script('js/plugins.js')}}

    {{HTML::script('js/jquery-scrolltofixed-min.js')}}
    {{HTML::script('/js/noty/packaged/jquery.noty.packaged.min.js')}}
    <script type="text/javascript">
        function notificar(texto) {
            var n = noty({
                text: texto,
                theme: 'relax',
                type: 'sucess',
                layout: 'top',
                timeout: 6000
            });
        }

        function notificarError(texto) {
            var n = noty({
                text: texto,
                type: 'error',
                theme: 'relax',
                layout: 'top',
                timeout: 6000
            });
        }
    </script>
    
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    {{HTML::script('include/rs-plugin/js/jquery.themepunch.tools.min.js')}}
    {{HTML::script('include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}


    <!-- External CDN
    ============================================= -->
    {{HTML::style('css/bootstrap-datetimepicker.css')}}
    {{HTML::script('js/jquery.calendario.js')}}
    {{HTML::script('js/events-data.js')}}




    <!-- Document Title
    ============================================= -->
    <title>Corte´x</title>

</head>

<body class="stretched">

@if(Session::get('mensaje'))
    <script type="text/javascript">
        var variablejs = "<?= Session::get('mensaje') ?>" ;
        notificar(variablejs);
    </script>
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
@if($errors->has('mensaje'))
    @foreach($errors->get('mensaje') as $error)
        <script type="text/javascript">
            var variablejs = "<?= $error ?>" ;
            notificarError(variablejs);
        </script>
        @endforeach
        @endif
    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header id="header" class="sticky-style-2">

            <div class="container clearfix">

                <!-- Logo
                ============================================= -->
                <div id="logo" class="divcenter">
                    <a href="{{URL::asset('inicio')}}" class="standard-logo" data-dark-logo="images/logo-dark.png"><img class="divcenter" src="{{URL::asset('images/logo.png')}}" alt="Canvas Logo">
                    </a>
                    <a href="{{URL::asset('inicio')}}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img class="divcenter" src="{{URL::asset('images/logo@2x.png')}}" alt="Canvas Logo">
                    </a>
                </div>
                <!-- #logo end -->

            </div>

            <div id="header-wrap">

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="style-2 center">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="center icon-reorder"></i>
                        </div>

                        <ul>
                            <li>
                                <a href="{{URL::asset('inicio')}}">
                                    <div>Inicio</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::asset('conocenos')}}">
                                    <div>Conócenos</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::asset('galeria')}}">
                                    <div>Galería</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::asset('contacto')}}">
                                    <div>Contacto</div>
                                </a>
                            </li>

                            @if(Auth::check()==true)
                                @if(Cliente::esCliente()==true)
                                    <li>
                                        <a href="{{URL::asset('cliente/calendario')}}">
                                            <div>Ir a mi panel</div>
                                        </a>
                                    </li>
                                @else
                                <li>
                                    <a href="{{URL::asset('administrador/calendario')}}">
                                        <div>Ir a mi panel</div>
                                    </a>
                                </li>

                                @endif
                            @else
                            <li>
                                <a href="{{URL::asset('loginRegistro')}}">
                                    <div>Inicio Sesión | Registro</div>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>

                </nav>
                <!-- #primary-menu end -->

            </div>

        </header>
        <!-- #header end -->
        </div>