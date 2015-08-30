@include('headerInicio')

<!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Conócenos</h1>
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a>
            </li>
            <li class="active">Conócenos</li>
        </ol>
    </div>

</section>
<!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="row">

                <div class="fancy-title title-bottom-border center" style="text-align: center">
                    <h2>El <span>Equipo</span></h2>
                </div>
                <div class="col-sm-6 col-xs-12">

                        <div class="oc-item">
                            <div class="card hovercard">
                                <div class="cardheader">

                                </div>
                                <div class="avatar">
                                   <img alt="" src="images/team/chari.png" style="margin-right: 65%;">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        Chari Rodríguez Corrales

                                    </div>
                                </div>
                                <div class="bottom">
                                    <p>"Llevo 20 años dedicada a la peluquería y 10 siendo empresaria."</p>

                                    En Corte'x, Chari es jefa, administradora y  estilista. Se centra en sus clientes ofreciéndoles un trato especializado,
                                    único a cada uno de ellos. Y cumple con los deseos y peticiones que recibe, aportando consejos estéticos y nuevas técnicas.


                                </div>
                            </div>

                        </div>
                    </div>

                <div class="col-sm-6 col-xs-12">

                        <div class="oc-item">
                            <div class="card hovercard">
                                <div class="cardheader">

                                </div>
                                <div class="avatar">
                                    <img alt="" src="images/team/desi.png" style="margin-right: 65%;">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        Desi

                                    </div>
                                </div>
                                <div class="bottom">
                                    <p>"Soy peluquera ayudante, ya llevo años en esto y  cada vez me apasiona más."</p>

                                    En Corte'x. Desi ayuda a Chari a atender a los clientes y ofrecerles un trato agradable y sin esperas.
                                    Siempre atenta a las nuevas tendencias, y con su juventud, Desi es un respiro de aire fresco y nuevo en Corte'x.

                                </div>
                            </div>

                        </div>

                    </div>

                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {

                            var ocImages = $("#oc-images");

                            ocImages.owlCarousel({
                                margin: 20,
                                nav: true,
                                navText: ['<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>'],
                                autoplay: false,
                                autoplayHoverPause: true,
                                dots: false,
                                navRewind: false,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    600: {
                                        items: 1
                                    },
                                    1000: {
                                        items: 1
                                    },
                                    1200: {
                                        items: 1
                                    }
                                }
                            });

                        });
                    </script>


                </div>

            </div>

        </div>

</section>

<!-- #content end -->

@include('footerInicio')