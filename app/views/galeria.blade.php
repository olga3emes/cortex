@include('headerInicio')

<!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Galerías</h1>
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a>
            </li>
            <li class="active">Galerías</li>
        </ol>
    </div>

</section>
<!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">

    <div class="content-wrap">


        <div class="fancy-title center">
            <h2>Nuestras<span> Galerías</span></h2>
        </div>

        <div class="clear"></div>

        <!-- Elementos Galería -->
        @foreach($galerias as $galeria)

            <div id="portfolio">

                <article id="galerias">
                    <div class="col-sm-3 col-md-3 col-xs-12" >
                        <a href="{{URL::asset('galeria/imagenes/'.$galeria->id)}}"> <img
                                    src="{{URL::asset('img/portada/Cortex-Galeria-'.$galeria->id.'.jpg')}}"
                                    style="height: 300px; width: auto;margin-left: 5%; margin-right: 5%;" alt=""></a>

                        <a href="{{URL::asset('galeria/imagenes/'.$galeria->id)}}"><h4
                                    style="text-align: center; width: 250px;">Galería: <span>{{$galeria->nombre}}</span>
                            </h4></a>

                    </div>

                </article>
                @endforeach


            </div>

            <!-- END Elementos Galería -->


    </div>

    </div>

</section>
<!-- #content end -->

@include('footerInicio')