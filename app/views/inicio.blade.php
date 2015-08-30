@include('headerInicio')

<section id="slider" class="slider-parallax revslider-wrap clearfix">

    <!--
            #################################
                - THEMEPUNCH BANNER -
            #################################
            -->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE 1  -->
<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="images/slider/rev/ken-2-thumb.jpg" data-delay="15000" data-saveperformance="off" data-title="">
                    <!-- MAIN IMAGE -->
                    <img src="{{URL::asset('images/slider/rev/ken-1.jpg')}}" alt="kenburns6" data-bgposition="center bottom" data-kenburns="on" data-duration="25000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="120" data-bgpositionend="center top">
                </li>
                <!-- SLIDE 2  -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="images/slider/rev/ken-2-thumb.jpg" data-delay="15000" data-saveperformance="off" data-title="">
                    <!-- MAIN IMAGE -->
                    <img src="{{URL::asset('images/slider/rev/ken-2.jpg')}}" alt="kenburns6" data-bgposition="center bottom" data-kenburns="on" data-duration="25000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="120" data-bgpositionend="center top">
                </li>
            </ul>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function () {

            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 16000,
                startwidth: 1140,
                startheight: 600,
                hideThumbs: 200,

                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,

                navigationType: "bullet",
                navigationArrows: "solo",
                navigationStyle: "preview4",

                touchenabled: "on",
                onHoverStop: "on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                keyboardNavigation: "off",

                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",

                spinner: "spinner4",

                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: "off",

                autoHeight: "off",
                forceFullWidth: "off",
                hideTimerBar: "on",


                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ".header"
            });

        }); //ready
    </script>

    <!-- END REVOLUTION SLIDER -->


</section>

<!-- Content
        ============================================= -->
<section id="content">
<!-- Precios -->
<section>
    <div class="container">
        <div class="content-wrap" style="margin-left: 20%;margin-right: 20%">
            <div class="fancy-title title-bottom-border center">
                <h2>La filosofía<span> Corte'x</span></h2>
            </div>

            <p>Nuestra filosofía es mantenernos siempre informados de las últimas tendencias en el mundo de la  peluquería, tanto en corte y técnicas cómo en productos de peluquería, para así  poder ofrece a nuestros clientes siempre el mejor servicio.</p>

            <p>La pasión que ponemos en todo lo relacionado con el mundo de la peluquería y las tendencias, se refleja en cada uno de los trabajos que realizamos en nuestro salón.</p>

            <p>Consideramos que cada cliente es único, y por tanto merece un trato personalizado, asesorándole siempre sobre las mejores opciones respecto a su estilo, facciones y personalidad,así como teniendo en cuenta sus preferencias y gustos,  para así,  con todo ello, obtener unos resultados óptimos y vanguardistas.</p>

            <p>Es por eso que Corte'x cumple 10 años y queremos celebrándolo ofreciéndole a nuestros clientes nuestros servicios a través de las nuevas tecnologías.</p>
        </div>
    </div>


</section>
<!-- END Precios -->


    <!-- CTA Cita -->
    <div class="section">
        <div class="container">
            <div class="row" style="margin-left: 20%;margin-right: 20%">
                <ul class="list-inline center">
                    <div class="fancy-title title-bottom-border center" style="margin-left: 30%;margin-right: 30%">
                        <h2>Solicitar<span> Cita</span></h2>
                    </div>
                    <li>
                        <div class="form-group">
                            <h5>Para poder coger cita para nuestra peluquería, tendrá que registrarse o iniciar sesión primero.</h5>
                        </div>

                        Los servicios ofrecidos en esta web son completamente gratuitos, por cortesía de Corte'x hacia sus clientes.<br>
                        ¡Adelante, no dude en hacer uso de ellos!
                    </li>
                    <div class="row">
                        <a href="{{URL::asset('loginRegistro')}}" class="button button-rounded button-reveal button-red tright info" style="margin-bottom: 5%; margin-top: 5%;"><i class="icon-angle-right"></i><span>Continuar</span></a>
                    </div>
                </ul>
                        </div>


                    </div>
            </div>


    <!-- END CTA Cita -->
    <!-- Precios -->
    <section>
        <div class="container">

            <div class="content-wrap" style="margin-left: 20%;margin-right: 20%">

                <div class="fancy-title title-bottom-border center">
                    <h2>Nuestras <span>Ofertas</span></h2>
                </div>
                <div class="table-responsive">

                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                        <tr>
                            <td>Oferta</td>
                            <td width="60">Descuento</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Todos los jueves nuestros peinados</td>
                            <td>15% más baratos</td>
                        </tr>
                        <tr>
                            <td>Los lunes del tinte: </td>
                            <td>10% más baratos todos los tintes</td>
                        </tr>
                        <tr>
                            <td>El 25 de cada mes</td>
                            <td>25% en productos de pelquería profesional</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <br>
                <div class="row" style="margin-left: 20%;margin-right: 20%">
                <div class="fancy-title title-bottom-border center">
                    <h2>Nuestros <span>Precios</span></h2>
                </div>
                <div class="table-responsive">

                    <table class="table table-hover table-comparison nobottommargin precios">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Precio (IVA incluido)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lavar, Cortar y Peinar</td>
                                <td>17€</td>
                            </tr>
                            <tr>
                                <td>Tinte y Peinar</td>
                                <td>28€</td>
                            </tr>
                            <tr>
                                <td>Rulos</td>
                                <td>15€</td>
                            </tr>
                            <tr>
                                <td>Mechas y Peinar</td>
                                <td>47€</td>
                            </tr>
                            <tr>
                                <td>Reflejos</td>
                                <td>18€</td>
                            </tr>
                            <tr>
                                <td>Lavar y Peinar</td>
                                <td>9,50€</td>
                            </tr>
                            <tr>
                                <td>Corte niños</td>
                                <td>10€</td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>
                </div>
        </div>
    </section>
    <!-- END Precios -->
    <!-- Calendario -->
    <section>
        <div class="container">
            <div class="content-wrap">
                <div class="fancy-title title-bottom-border center">
                    <h2><span>Horario</span> de Apertura</h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-comparison nobottommargin horario">
                        <tr >
                            <th style="text-align: center;">Lunes</th>
                            <th style="text-align: center;">Martes</th>
                            <th style="text-align: center;">Miércoles</th>
                            <th style="text-align: center;">Jueves</th>
                            <th style="text-align: center;">Viernes</th>
                            <th style="text-align: center;">Sábado</th>
                            <th style="text-align: center;">Domingo</th>
                        </tr>
                        <tr>
                            <td style="text-align:center;">9:30 - 13:30</td>
                            <td>9:30 - 13:30</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                            <td>9:30 - 13:30</td>
                            <td>9:30 - 13:30</td>
                            <td>9:30 - 14:00</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">16:30 - 20:00</td>
                            <td>16:30 - 20:00</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                            <td>16:30 - 20:00</td>
                            <td>16:30 - 20:00</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- END Calendario -->
</section>
<!-- #content end -->

 <!-- Mapa -->
    <div id="section-contact" class="page-section notoppadding">

        <div class="row noleftmargin norightmargin common-height">
            <div id="headquarters-map" class="col-md-8 col-sm-6 gmap hidden-xs"></div>
            <div class="col-md-4 col-sm-6" style="background-color: #F5F5F5; color: #282828;">
                <div class="col-padding max-height">
                    <h3 class="font-body t400 ls1" style="color: #AA1B30;">Dónde Encontrarnos</h3>

                    <div style="font-size: 16px; line-height: 1.7;">
                        <address style="line-height: 1.7;">
										C/Las Cabezas de San Juan<br>
										41700 Dos Hermanas<br>
                                        Sevilla<br>
									</address>

                        <div class="clear topmargin"></div>

                        <strong style="color: #AA1B30;">Teléfono:</strong> +34 955 677 264
                        <br>
                        <strong style="color: #AA1B30;">Email:</strong>infopeluqueriacortex@gmail.com
                    </div>
                </div>
            </div>
        </div>

        {{HTML::script('http://maps.google.com/maps/api/js?sensor=true')}}
        {{HTML::script('js/jquery.gmap.js')}}

        <script type="text/javascript">
            jQuery(window).load(function () {
                jQuery('#headquarters-map').gMap({
                    address: 'Las Cabezas de San Juan, Dos Hermanas, Sevilla, 41700',
                    maptype: 'ROADMAP',
                    zoom: 17,
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    controls: {

                        overviewMapControl: true
                    },
                    markers: [
                        {
                            address: "Las Cabezas de San Juan, Dos Hermanas, Sevilla, 41700",
                            html: "Las Cabezas de San Juan, Dos hermanas, Sevilla, 41700",
                            icon: {
                                image: "images/icons/map-icon.png",
                                iconsize: [34, 34],
                                iconanchor: [15, 30]
                            }
         }
        ],
                    doubleclickzoom: false


                });
            });
        </script>


    </div>
    <!-- END Mapa -->

@include('footerInicio')
