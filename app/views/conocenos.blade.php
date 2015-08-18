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
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    
                    <div class="fancy-title">
                        <h2>El <span>Equipo</span></h2>
                    </div>

                    <div id="oc-images" class="owl-carousel image-carousel">

                        <div class="oc-item">
                            <div class="card hovercard">
                                <div class="cardheader">

                                </div>
                                <div class="avatar">
                                    <img alt="" src="images/team/olga.jpg">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        Olga M. Moreno
                                        <a class="btn btn-primary btn-sm" rel="publisher" href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="bottom">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </div>
                            </div>

                        </div>

                        <div class="oc-item">
                            <div class="card hovercard">
                                <div class="cardheader">

                                </div>
                                <div class="avatar">
                                    <img alt="" src="images/team/olga.jpg">
                                </div>
                                <div class="info">
                                    <div class="title">
                                        Olga M. Moreno
                                        <a class="btn btn-primary btn-sm" rel="publisher" href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="bottom">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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

                <div class="col-lg-8 col-sm-6 col-xs-12">
                    <div class="fancy-title">
                        <h2>Nuestra <span>Peluquería</span></h2>
                    </div>
                    <p>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis metus est, ultrices a congue vel, elementum id quam. Aliquam purus nisl, venenatis a consectetur at, luctus quis nisi. Donec vitae felis non est maximus imperdiet. Maecenas mauris quam, ornare at odio vel, ornare efficitur lectus. Nunc congue consectetur leo, ac bibendum nibh maximus sit amet. Fusce eget eros ligula. Aliquam vulputate urna nec nisl volutpat luctus. Duis egestas, lectus ac pretium malesuada, sapien urna venenatis tellus, ut volutpat magna arcu vel enim. Fusce non malesuada nisl. Curabitur placerat, felis sed elementum sollicitudin, sem lacus porta diam, a viverra odio sapien quis mauris. Sed eget odio nec risus ultricies pulvinar nec ac eros. Suspendisse sagittis eu justo a interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    </p>
                    <p>
                      Aliquam sit amet varius diam. Nulla varius convallis scelerisque. Nunc egestas laoreet nibh dapibus laoreet. Integer luctus nibh suscipit massa facilisis suscipit. Donec quis libero eget ante tincidunt venenatis eget in risus. Phasellus placerat blandit dui, fringilla facilisis mauris scelerisque a. Duis augue diam, tincidunt sed blandit nec, vestibulum in enim. 
                    </p>
                    <p>
                     Praesent tempus ut mi ac aliquet. Suspendisse vel ex purus. Vivamus varius nibh in eleifend semper. Ut gravida eros non orci maximus iaculis. Integer sollicitudin rutrum elementum. Nulla id massa vulputate, venenatis diam elementum, blandit lectus. Proin quis euismod nunc. 
                    </p>
                </div>

            </div>

        </div>

</section>

<!-- #content end -->

@include('footerInicio')