@include('headerInicio')


<!-- Page Title
       ============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Galería</h1>
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a>
            </li>
            <li class="active">{{$galeria->nombre}}</li>
        </ol>
    </div>

</section>
<!-- #page-title end -->

<!-- Content
        ============================================= -->

<section id="content">


    <div class="content-wrap">


        <div class="fancy-title center">
            <h2>{{$galeria->nombre}}</h2>
        </div>

        <div class="container clearfix">

            <div id="portfolio-ajax-wrap">
                <div id="portfolio-ajax-container"></div>
            </div>

            <div id="portfolio-ajax-loader"><img src="images/preloader-dark.gif" alt="Preloader">
            </div>

            <div class="clear"></div>

            <!-- Elementos Galería -->


            <div class="content-wrapper">

                <!-- Main content -->
                @foreach($imagenes as $imagen)

                <article class="col-sm-3 col-md-3 col-xs-12"
                         style="display:inline;width:300px;margin:10px;text-align:center;border-radius:5px;">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="{{URL::asset('img/galeria/'.$galeria->id.'/'.$imagen->nombre)}}"  data-toggle="modal" data-target="{{'#foto'.$imagen->id}}">
                        </a>
                        <!-- Modal Foto -->
                        <div class="modal fade" id="{{'foto'.$imagen->id}}" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-sm" role="img">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-responsive"
                                             src="{{URL::asset('img/galeria/'.$galeria->id.'/'.$imagen->nombre)}}"/>
                                    </div>
                                </div>
                            </div></div></div>

                </article>
                @endforeach

            </div>


        </div>

        <!-- END Elementos Galería -->


    </div>

</section>


@include('footerInicio')