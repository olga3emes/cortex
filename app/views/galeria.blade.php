@include('headerInicio')

<!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Galería</h1>
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a>
            </li>
            <li class="active">Galería</li>
        </ol>
    </div>

</section>
<!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div id="portfolio-ajax-wrap">
                <div id="portfolio-ajax-container"></div>
            </div>

            <div id="portfolio-ajax-loader"><img src="images/preloader-dark.gif" alt="Preloader">
            </div>

            <!-- Galería Filtros -->
            <ul id="portfolio-filter" class="clearfix">

                <li class="activeFilter"><a href="#" data-filter="*">Todos</a>
                </li>
                <li><a href="#" data-filter=".pf-peinados">Peinados</a>
                </li>
                <li><a href="#" data-filter=".pf-productos">Productos</a>
                </li>

            </ul>
            <!-- END Galería Filtros -->

            <div class="clear"></div>

            <!-- Elementos Galería -->
            <div id="portfolio" class="portfolio-nomargin portfolio-ajax clearfix">

                <article id="portfolio-item-3" data-loader="include/ajax/portfolio-ajax-slider.php" class="portfolio-item pf-peinados">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="images/portfolio/4/1.jpg" alt="">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-video.html">nombreGaleria</a></h3>
                        <span><a href="#">Peinados</a></span>
                    </div>
                </article>
                
                <article id="portfolio-item-3" data-loader="include/ajax/portfolio-ajax-slider.php" class="portfolio-item pf-productos">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="images/portfolio/4/2.jpg" alt="">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-video.html">nombreGalería</a></h3>
                        <span><a href="#">Productos</a></span>
                    </div>
                </article>
                
                <article id="portfolio-item-3" data-loader="include/ajax/portfolio-ajax-slider.php" class="portfolio-item pf-productos">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="images/portfolio/4/3.jpg" alt="">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-video.html">nombreGaleria</a></h3>
                        <span><a href="#">Productos</a></span>
                    </div>
                </article>
                
                <article id="portfolio-item-3" data-loader="include/ajax/portfolio-ajax-slider.php" class="portfolio-item pf-productos">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="images/portfolio/4/4.jpg" alt="">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="#" class="center-icon"><i class="icon-line-expand"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-video.html">nombreGaleria</a></h3>
                        <span><a href="#">Productos</a></span>
                    </div>
                </article>
                
            </div>
            <!-- END Elementos Galería -->
            
            <!-- Galería Script
                    ============================================= -->
                    <script type="text/javascript">

                        jQuery(window).load(function(){

                            var $container = $('#portfolio');

                            $container.isotope({ transitionDuration: '0.65s' });

                            $('#portfolio-filter a').click(function(){
                                $('#portfolio-filter li').removeClass('activeFilter');
                                $(this).parent('li').addClass('activeFilter');
                                var selector = $(this).attr('data-filter');
                                $container.isotope({ filter: selector });
                                return false;
                            });

                            $('#portfolio-shuffle').click(function(){
                                $container.isotope('updateSortData').isotope({
                                    sortBy: 'random'
                                });
                            });

                            $(window).resize(function() {
                                $container.isotope('layout');
                            });

                        });

                    </script><!-- END Galería Script -->

        </div>

    </div>

</section>
<!-- #content end -->

@include('footerInicio')